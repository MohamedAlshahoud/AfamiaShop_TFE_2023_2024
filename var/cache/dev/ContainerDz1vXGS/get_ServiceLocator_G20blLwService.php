<?php

namespace ContainerDz1vXGS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G20blLwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G20blLw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G20blLw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'contactRepository' => 'App\\Repository\\ContactRepository',
            'translator' => '?',
        ]);
    }
}
