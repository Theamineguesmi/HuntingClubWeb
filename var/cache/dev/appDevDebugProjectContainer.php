<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY0qpolx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY0qpolx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerY0qpolx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerY0qpolx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerY0qpolx\appDevDebugProjectContainer([
    'container.build_hash' => 'Y0qpolx',
    'container.build_id' => 'c57c1324',
    'container.build_time' => 1592160575,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY0qpolx');
