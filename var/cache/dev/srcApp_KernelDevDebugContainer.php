<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCT27Obg\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCT27Obg/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCT27Obg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCT27Obg\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCT27Obg\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CT27Obg',
    'container.build_id' => 'f74e6974',
    'container.build_time' => 1586188972,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCT27Obg');
