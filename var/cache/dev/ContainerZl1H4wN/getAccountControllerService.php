<?php

namespace ContainerZl1H4wN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccountController' shared autowired service.
     *
     * @return \App\Controller\AccountController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AccountController.php';

        $container->services['App\\Controller\\AccountController'] = $instance = new \App\Controller\AccountController(($container->privates['App\\Repository\\OrderRepository'] ?? $container->load('getOrderRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AccountController', $container));

        return $instance;
    }
}
