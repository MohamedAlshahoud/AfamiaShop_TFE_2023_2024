<?php

namespace ContainerXm8YmtB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ContactController' shared autowired service.
     *
     * @return \App\Controller\ContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ContactController'] = $instance = new \App\Controller\ContactController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ContactController', $container));

        return $instance;
    }
}
