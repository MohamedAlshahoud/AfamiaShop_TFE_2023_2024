<?php

namespace ContainerXm8YmtB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Newsletters\CategoriesRepository' shared autowired service.
     *
     * @return \App\Repository\Newsletters\CategoriesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Newsletters\\CategoriesRepository'] = new \App\Repository\Newsletters\CategoriesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
