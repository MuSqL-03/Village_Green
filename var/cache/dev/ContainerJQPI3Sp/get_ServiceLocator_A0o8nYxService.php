<?php

namespace ContainerJQPI3Sp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A0o8nYxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A0o8nYx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A0o8nYx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.A0o8nYx.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.A0o8nYx": it needs an instance of "App\\Entity\\Users" but this type has been excluded in "config/services.yaml".'],
        ], [
            'user' => 'App\\Entity\\Users',
        ]);
    }
}
