<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHqxAxoP\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHqxAxoP/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHqxAxoP.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHqxAxoP\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHqxAxoP\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HqxAxoP',
    'container.build_id' => 'e63cc336',
    'container.build_time' => 1586422691,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHqxAxoP');
