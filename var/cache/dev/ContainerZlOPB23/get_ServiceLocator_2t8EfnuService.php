<?php

namespace ContainerZlOPB23;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2t8EfnuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2t8Efnu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2t8Efnu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'newsletters' => ['privates', 'App\\Repository\\Newsletters\\NewslettersRepository', 'getNewslettersRepositoryService', true],
        ], [
            'newsletters' => 'App\\Repository\\Newsletters\\NewslettersRepository',
        ]);
    }
}
