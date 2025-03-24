<?php

namespace ContainerRLv3sex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_MailerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.mailer' shared service.
     *
     * @return \Symfony\Component\Mailer\Mailer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['mailer.mailer'])) {
            return $container->privates['mailer.mailer'];
        }
        $b = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['mailer.mailer'])) {
            return $container->privates['mailer.mailer'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['mailer.mailer'])) {
            return $container->privates['mailer.mailer'];
        }

        return $container->privates['mailer.mailer'] = new \Symfony\Component\Mailer\Mailer($a, $b, $c);
    }
}
