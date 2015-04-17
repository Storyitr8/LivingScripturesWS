<?php
namespace LSI\SystemBundle\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LSIEventListener
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
       $user = $event->getAuthenticationToken()->getUser();
       $program = $user->getSalesProgramType();
       $this->container->get('lsi_system.program_service')->setActiveProgram($program);
    }
}