<?php

namespace LSI\SalesRabbitBundle\Listener;

use Doctrine\ORM\EntityManager;
use LSI\OrderBundle\Service\OrderToCsvService;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use LSI\SalesRabbitBundle\Entity\SalesRabbitOrder;
use Symfony\Component\Process\Process;

class SalesRabbitListener
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var OrderToCsvService
     */
    protected $csvService;

    public function __construct(EntityManager $em, OrderToCsvService $csvService)
    {
        $this->em = $em;
        $this->csvService = $csvService;
    }

    public function onKernelTerminate(PostResponseEvent $event)
    {
        $route = $event->getRequest()->get('_route');
        if($route !== 'lsi.sales_rabbit.sales_rabbit_orders.create'){
            return;
        }
        $process = new Process('php /var/www/ws.livingscriptures.com/app/console lsi:sales_rabbit:process_orders');
        $process->run();
        file_put_contents('/var/log/ws.livingscriptures.com/onDemandOrderProcessing.log',$process->getOutput(),FILE_APPEND);
        file_put_contents('/var/log/ws.livingscriptures.com/onDemandOrderProcessingError.log',$process->getErrorOutput(),FILE_APPEND);
        return;
    }
}