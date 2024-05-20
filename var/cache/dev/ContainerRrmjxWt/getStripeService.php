<?php

namespace ContainerRrmjxWt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStripeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\Stripe' shared autowired service.
     *
     * @return \App\Services\Stripe
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/Stripe.php';

        return $container->privates['App\\Services\\Stripe'] = new \App\Services\Stripe(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\PaymentRepository'] ?? $container->load('getPaymentRepositoryService')));
    }
}
