<?php

namespace ContainerDMe9bGd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_ProviderRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.provider_registry' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorProviderRegistry.php';

        return $container->privates['scheb_two_factor.provider_registry'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
