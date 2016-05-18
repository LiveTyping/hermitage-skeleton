<?php

/**
 * [
 *    '{version-name}' => [
 *        'type' => '{manipulator-name}',
 *        // manipulator options
 *    ],
 * ]
 *
 * Default manipulators:
 *  - resize {@link \livetyping\hermitage\foundation\images\processor\manipulators\Resize}
 *  - fit {@link \livetyping\hermitage\foundation\images\processor\manipulators\Fit}
 */
return [
    'mini' => [
        'type' => 'resize',
        'height' => 200,
        'width' => 200,
    ],
    'small' => [
        'type' => 'resize',
        'height' => 400,
        'width' => 400,
    ],
    'thumb' => [
        'type' => 'fit',
        'height' => 100,
        'width' => 100,
    ],
];
