<?php

namespace ContainerDz1vXGS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.zJyh7qS'] ?? $container->get_ServiceLocator_ZJyh7qSService()), ($container->privates['.service_locator.XsyfP82'] ?? $container->load('get_ServiceLocator_XsyfP82Service')), ['main' => [0 => ($container->privates['App\\Security\\LoginAuthenticator'] ?? $container->load('getLoginAuthenticatorService')), 1 => ($container->privates['App\\Security\\GoogleAuthenticator'] ?? $container->load('getGoogleAuthenticatorService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
