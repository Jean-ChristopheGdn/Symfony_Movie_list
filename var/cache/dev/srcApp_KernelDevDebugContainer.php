<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSvBOgkB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSvBOgkB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSvBOgkB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSvBOgkB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSvBOgkB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SvBOgkB',
    'container.build_id' => 'a0605f10',
    'container.build_time' => 1586353410,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSvBOgkB');
