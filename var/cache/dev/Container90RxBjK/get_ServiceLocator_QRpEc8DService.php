<?php

namespace Container90RxBjK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QRpEc8DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QRpEc8D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QRpEc8D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'post' => ['privates', '.errored..service_locator.QRpEc8D.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.QRpEc8D": it references class "App\\Entity\\Post" but no such service exists.'],
        ], [
            'eventDispatcher' => '?',
            'post' => 'App\\Entity\\Post',
        ]);
    }
}
