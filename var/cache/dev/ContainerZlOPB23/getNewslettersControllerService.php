<?php

namespace ContainerZlOPB23;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewslettersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NewslettersController' shared autowired service.
     *
     * @return \App\Controller\NewslettersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'NewslettersController.php';

        $container->services['App\\Controller\\NewslettersController'] = $instance = new \App\Controller\NewslettersController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\NewslettersController', $container));

        return $instance;
    }
}
