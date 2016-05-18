<?php

use function DI\string;

return [
    'root-dir' => dirname(__DIR__),
    'storage-dir' => string('{root-dir}/storage'),

    'images.manager-config' => ['driver' => 'gd'],
    'images.versions' => require __DIR__ . '/versions.php',
    'images.optimization-params' => ['maxHeight' => 800, 'maxWidth' => 800, 'interlace' => true],
    'images.manipulator-map' => [
        'resize' => \livetyping\hermitage\foundation\images\processor\manipulators\Resize::class,
        'fit' => \livetyping\hermitage\foundation\images\processor\manipulators\Fit::class,
    ],
];
