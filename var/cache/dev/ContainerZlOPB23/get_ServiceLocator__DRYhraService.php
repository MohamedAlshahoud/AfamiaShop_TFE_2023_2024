<?php

namespace ContainerZlOPB23;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__DRYhraService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..dRYhra' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..dRYhra'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator..dRYhra.App\\Entity\\Newsletters\\Users', NULL, 'Cannot autowire service ".service_locator..dRYhra": it references class "App\\Entity\\Newsletters\\Users" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\Newsletters\\Users',
        ]);
    }
}
