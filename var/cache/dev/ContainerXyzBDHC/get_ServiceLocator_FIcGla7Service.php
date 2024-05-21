<?php

namespace ContainerXyzBDHC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FIcGla7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FIcGla7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FIcGla7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'siteInformationRepository' => ['privates', 'App\\Repository\\SiteInformationRepository', 'getSiteInformationRepositoryService', true],
            'sliderRepository' => ['privates', 'App\\Repository\\SliderRepository', 'getSliderRepositoryService', true],
        ], [
            'entityManager' => '?',
            'paginator' => '?',
            'productRepository' => 'App\\Repository\\ProductRepository',
            'siteInformationRepository' => 'App\\Repository\\SiteInformationRepository',
            'sliderRepository' => 'App\\Repository\\SliderRepository',
        ]);
    }
}
