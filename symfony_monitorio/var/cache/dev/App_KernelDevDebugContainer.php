<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFc4wITs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFc4wITs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFc4wITs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFc4wITs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFc4wITs\App_KernelDevDebugContainer([
    'container.build_hash' => 'Fc4wITs',
    'container.build_id' => '9ca30b92',
    'container.build_time' => 1645632833,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFc4wITs');
