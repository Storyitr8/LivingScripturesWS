<?php

namespace {
    set_time_limit(0);
}

namespace LSI\SalesRabbitBundle\Command {

    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Output\OutputInterface;
    use LSI\SalesRabbitBundle\Entity\SalesRabbitOrder;
    use LSI\OrderBundle\Service\OrderToCsvService;
    use Symfony\Component\Console\Helper\ProgressBar;

    class ProcessSalesRabbitOrdersCommand extends ContainerAwareCommand
    {

        protected function configure()
        {
            $this->setName('lsi:sales_rabbit:process_orders')
                ->setDescription('Manually runs the logic to process the sales rabbit orders');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');
            /** @var OrderToCsvService $orderToCsvService */
            $orderToCsvService = $this->getContainer()->get('lsi_order.order_to_csv');
            $unprocessedOrders = $em->getRepository('LSISalesRabbitBundle:SalesRabbitOrder')->createQueryBuilder('o')
                ->where('o.processed = 0')
                ->andWhere('o.process_attempts < 3')
                ->getQuery()
                ->getResult();
            $progress = new ProgressBar($output, count($unprocessedOrders));
            $progress->setFormat('debug');

            /** @var SalesRabbitOrder $order */
            foreach($unprocessedOrders as $order)
            {
                try{
                    $orderToCsvService->straightConvertToCsv($order);
                } catch(\Exception $e){
                    $order->setProcessAttempts($order->getProcessAttempts()+1);
                    $order->setLastError($e->getMessage());
                    $em->flush();
                    $progress->advance();
                    mail('chase.i.noel@gmail.com','LSI Order Processing Failed',$e->getMessage(),'From: no-reply@ws.livingscriptures.com'. "\r\n". 'X-Mailer: PHP/' . phpversion());
                    continue;
                }
                $order->setProcessed(true);
                $em->flush();
                $progress->advance();
            }
            $progress->finish();
            $output->writeln('');
        }
    }
}