<?php

namespace ContainerV6dG3kK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZk3AmMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FZk3AmM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FZk3AmM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartServices' => ['privates', 'App\\Services\\CartServices', 'getCartServicesService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cartServices' => 'App\\Services\\CartServices',
            'manager' => '?',
        ]);
    }
}
