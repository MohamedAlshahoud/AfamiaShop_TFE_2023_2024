<?php

namespace ContainerXm8YmtB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckoutTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CheckoutType' shared autowired service.
     *
     * @return \App\Form\CheckoutType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CheckoutType'] = new \App\Form\CheckoutType();
    }
}
