<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQGgnTIx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQGgnTIx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQGgnTIx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQGgnTIx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQGgnTIx\App_KernelDevDebugContainer([
    'container.build_hash' => 'QGgnTIx',
    'container.build_id' => '8ade9264',
    'container.build_time' => 1622464093,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQGgnTIx');