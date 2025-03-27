<?php

namespace ContainerGuX6Jy0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ETkEERIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ETkEERI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ETkEERI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.ETkEERI.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.ETkEERI": it needs an instance of "App\\Entity\\Users" but this type has been excluded in "config/services.yaml".'],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\Users',
            'userPasswordHasher' => '?',
        ]);
    }
}
