<?php

namespace ContainerZl1H4wN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckoutTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CheckoutType' shared autowired service.
     *
     * @return \App\Form\CheckoutType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CheckoutType.php';

        return $container->privates['App\\Form\\CheckoutType'] = new \App\Form\CheckoutType();
    }
}
