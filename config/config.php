<?php

return [
    'use_namespace' => env('ARTISAN_UI_USE_NAMESPACE', true),
    'colors' => [
        'primary'   => env('ARTISAN_UI_PRIMARY_COLOR', 'blue'),
        'secondary' => env('ARTISAN_UI_SECONDARY_COLOR', 'orange'),
        'success'   => env('ARTISAN_UI_SUCCESS_COLOR', 'green'),
        'warning'   => env('ARTISAN_UI_WARNING_COLOR', 'yellow'),
        'danger'    => env('ARTISAN_UI_DANGER_COLOR', 'red'),
        'tailwind'  => ['gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'],
    ],
    'color_depths' => [
        'text_over_dark'         => '100', // Number or white
        'text_over_light'        => '900', // Number or black
        'background'             => '600',
        'background-hover'       => '700',
        'background-light'       => '100',
        'background-light-hover' => '200',
        'border'                 => '800',
    ],
];
