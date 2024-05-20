<?php

namespace ContainerRrmjxWt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JZ9lcF0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jZ9lcF0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jZ9lcF0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartServices' => ['privates', 'App\\Services\\CartServices', 'getCartServicesService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'cartServices' => 'App\\Services\\CartServices',
            'manager' => '?',
            'translator' => '?',
        ]);
    }
}
