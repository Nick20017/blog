<?php

namespace ContainerXIx4Ayi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C7f47p7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c7f47p7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c7f47p7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
            'messenger.transport.async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'async' => '?',
            'failed' => '?',
            'messenger.transport.async' => '?',
            'messenger.transport.failed' => '?',
        ]);
    }
}
