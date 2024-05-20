<?php

namespace ContainerRrmjxWt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wuv1m_CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wuv1m.C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wuv1m.C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'address' => ['privates', '.errored..service_locator.wuv1m.C.App\\Entity\\Address', NULL, 'Cannot autowire service ".service_locator.wuv1m.C": it references class "App\\Entity\\Address" but no such service exists.'],
        ], [
            'address' => 'App\\Entity\\Address',
        ]);
    }
}
