<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZjkCxx5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZjkCxx5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZjkCxx5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZjkCxx5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZjkCxx5\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZjkCxx5',
    'container.build_id' => '1ba8b2d6',
    'container.build_time' => 1736700199,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZjkCxx5');
