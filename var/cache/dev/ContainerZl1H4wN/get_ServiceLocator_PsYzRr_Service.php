<?php

namespace ContainerZl1H4wN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PsYzRr_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.psYzRr.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.psYzRr.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartServices' => ['privates', 'App\\Services\\CartServices', 'getCartServicesService', true],
        ], [
            'cartServices' => 'App\\Services\\CartServices',
        ]);
    }
}
