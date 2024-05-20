<?php

namespace ContainerXm8YmtB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SearchController' shared autowired service.
     *
     * @return \App\Controller\SearchController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SearchController'] = $instance = new \App\Controller\SearchController(($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\SearchController', $container));

        return $instance;
    }
}
