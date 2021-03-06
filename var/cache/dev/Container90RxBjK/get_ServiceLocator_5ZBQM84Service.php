<?php

namespace Container90RxBjK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5ZBQM84Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5ZBQM84' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5ZBQM84'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\BlogController::delete' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\Admin\\BlogController::edit' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\Admin\\BlogController::index' => ['privates', '.service_locator.4jTisVh', 'get_ServiceLocator_4jTisVhService', true],
            'App\\Controller\\Admin\\BlogController::show' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\BlogController::commentForm' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\BlogController::commentNew' => ['privates', '.service_locator.QRpEc8D', 'get_ServiceLocator_QRpEc8DService', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.kNjWwTq', 'get_ServiceLocator_KNjWwTqService', true],
            'App\\Controller\\BlogController::postShow' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\BlogController::search' => ['privates', '.service_locator.4jTisVh', 'get_ServiceLocator_4jTisVhService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.FXjGl5F', 'get_ServiceLocator_FXjGl5FService', true],
            'App\\Controller\\UserController::changePassword' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\BlogController:delete' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\Admin\\BlogController:edit' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\Admin\\BlogController:index' => ['privates', '.service_locator.4jTisVh', 'get_ServiceLocator_4jTisVhService', true],
            'App\\Controller\\Admin\\BlogController:show' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\BlogController:commentForm' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\BlogController:commentNew' => ['privates', '.service_locator.QRpEc8D', 'get_ServiceLocator_QRpEc8DService', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.kNjWwTq', 'get_ServiceLocator_KNjWwTqService', true],
            'App\\Controller\\BlogController:postShow' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\BlogController:search' => ['privates', '.service_locator.4jTisVh', 'get_ServiceLocator_4jTisVhService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.FXjGl5F', 'get_ServiceLocator_FXjGl5FService', true],
            'App\\Controller\\UserController:changePassword' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\BlogController::delete' => '?',
            'App\\Controller\\Admin\\BlogController::edit' => '?',
            'App\\Controller\\Admin\\BlogController::index' => '?',
            'App\\Controller\\Admin\\BlogController::show' => '?',
            'App\\Controller\\BlogController::commentForm' => '?',
            'App\\Controller\\BlogController::commentNew' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::postShow' => '?',
            'App\\Controller\\BlogController::search' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::changePassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\BlogController:delete' => '?',
            'App\\Controller\\Admin\\BlogController:edit' => '?',
            'App\\Controller\\Admin\\BlogController:index' => '?',
            'App\\Controller\\Admin\\BlogController:show' => '?',
            'App\\Controller\\BlogController:commentForm' => '?',
            'App\\Controller\\BlogController:commentNew' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:postShow' => '?',
            'App\\Controller\\BlogController:search' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:changePassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
