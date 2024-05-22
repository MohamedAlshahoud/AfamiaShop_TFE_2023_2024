<?php

namespace App\EventSubscriber;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class AuthenticationExceptionSubscriber implements EventSubscriberInterface
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        if ($exception instanceof AuthenticationException) {
            $response = new RedirectResponse($this->router->generate('app_login'));
            $event->setResponse($response);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            ExceptionEvent::class => 'onKernelException',
        ];
    }
}
