<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXIx4Ayi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXIx4Ayi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXIx4Ayi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXIx4Ayi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXIx4Ayi\App_KernelDevDebugContainer([
    'container.build_hash' => 'XIx4Ayi',
    'container.build_id' => 'cbc263e9',
    'container.build_time' => 1713699577,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXIx4Ayi');