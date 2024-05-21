<?php

namespace ContainerDMe9bGd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AVHk8q_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aVHk8q.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aVHk8q.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'entityManager' => '?',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
