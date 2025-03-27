<?php

namespace ContainerB5K5FJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CPzBaXcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cPzBaXc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cPzBaXc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'product' => ['privates', '.errored..service_locator.cPzBaXc.App\\Entity\\Products', NULL, 'Cannot autowire service ".service_locator.cPzBaXc": it needs an instance of "App\\Entity\\Products" but this type has been excluded in "config/services.yaml".'],
        ], [
            'product' => 'App\\Entity\\Products',
        ]);
    }
}
