<?php

namespace ContainerQGgnTIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagsInputTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\TagsInputType' shared autowired service.
     *
     * @return \App\Form\Type\TagsInputType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TagsInputType.php';

        return $container->privates['App\\Form\\Type\\TagsInputType'] = new \App\Form\Type\TagsInputType(($container->privates['App\\Repository\\TagRepository'] ?? $container->load('getTagRepositoryService')));
    }
}
