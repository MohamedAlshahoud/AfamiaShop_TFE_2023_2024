<?php

namespace ContainerV6dG3kK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartServicesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\CartServices' shared autowired service.
     *
     * @return \App\Services\CartServices
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'CartServices.php';

        return $container->privates['App\\Services\\CartServices'] = new \App\Services\CartServices(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->privates['App\\Repository\\TransporterRepository'] ?? $container->load('getTransporterRepositoryService')), ($container->privates['App\\Repository\\SiteInformationRepository'] ?? $container->load('getSiteInformationRepositoryService')));
    }
}
