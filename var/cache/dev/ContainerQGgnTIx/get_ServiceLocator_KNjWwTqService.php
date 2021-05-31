<?php

namespace ContainerQGgnTIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KNjWwTqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kNjWwTq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kNjWwTq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'posts' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
            'tags' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
        ], [
            'posts' => 'App\\Repository\\PostRepository',
            'tags' => 'App\\Repository\\TagRepository',
        ]);
    }
}
