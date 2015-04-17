<?php
namespace {
    set_time_limit(0);
}

namespace LSI\ImportBundle\Command {

    use LSI\OrderBundle\Entity\OrderProduct;
    use LSI\OrderBundle\Entity\TaxRate;
    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Output\OutputInterface;
    use LSI\ImportBundle\Entity\Import;
    use Symfony\Component\Console\Helper\ProgressBar;

    class ImportTaxRatesCommand extends ContainerAwareCommand
    {
        const FILE_LOCATION = '/mnt/csv/TAXRATES.CSV';

        protected function configure()
        {
            $this->setName('lsi:import:tax_rates')
                ->setDescription('Imports the tax rates from TAXRATES.CSV');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');
            $taxRateRepo = $em->getRepository('LSIOrderBundle:TaxRate');
            if(($handle = fopen($this::FILE_LOCATION, 'r')) !== false){
                $lineCount = 0;
                while(!feof($handle)){
                    $line = fgets($handle);
                    $lineCount++;
                }
                $progress = new ProgressBar($output, $lineCount);
                $progress->setFormat('debug');
                rewind($handle);
                $itt=0;
                while( ($line = fgetcsv($handle,0,',','"')) !== false)
                {
                    $taxrate = $taxRateRepo->findOneByZip(trim($line[0]));
                    if(!$taxrate){
                        $taxrate = new TaxRate();
                        $taxrate->setZip(trim($line[0]));
                        $em->persist($taxrate);
                    }
                    $taxrate->setRate(floatval(trim($line[1])));
                    $progress->advance();
                    $itt++;
                    if($itt >= 5000){
                        $itt=0;
                        $em->flush();
                    }
                }
                fclose($handle);
                $progress->finish();
                $em->flush();
            }
            else{
                $output->write('faild to open: '.$this::FILE_LOCATION,true);
            }
        }
    }
}