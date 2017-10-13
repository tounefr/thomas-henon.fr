<?php
namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class HttpDebugHeadersListener
{
    public function __construct($env)
    {
        $this->env = $env;
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        $headers = $event->getResponse()->headers;
        $headers->set('X-Env',  $this->env);
    }
}