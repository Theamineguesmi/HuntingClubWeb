<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container34knwpq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container34knwpq/appProdProjectContainer.php') {
    touch(__DIR__.'/Container34knwpq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container34knwpq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container34knwpq\appProdProjectContainer([
    'container.build_hash' => '34knwpq',
    'container.build_id' => '898f6bb7',
    'container.build_time' => 1585806030,
], __DIR__.\DIRECTORY_SEPARATOR.'Container34knwpq');
