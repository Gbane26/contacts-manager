<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBOxBj4Y\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBOxBj4Y/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBOxBj4Y.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBOxBj4Y\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBOxBj4Y\App_KernelDevDebugContainer([
    'container.build_hash' => 'BOxBj4Y',
    'container.build_id' => '3263363a',
    'container.build_time' => 1736629002,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBOxBj4Y');
