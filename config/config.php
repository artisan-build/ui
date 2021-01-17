<?php

return [
    'use_namespace' => env('ARTISAN_UI_USE_NAMESPACE', true),
    'colors'        => [
        'primary'   => env('ARTISAN_UI_PRIMARY_COLOR', 'blue'),
        'secondary' => env('ARTISAN_UI_SECONDARY_COLOR', 'orange'),
        'success'   => env('ARTISAN_UI_SUCCESS_COLOR', 'green'),
        'warning'   => env('ARTISAN_UI_WARNING_COLOR', 'yellow'),
        'danger'    => env('ARTISAN_UI_DANGER_COLOR', 'red'),
        'tailwind'  => ['gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'],
    ],
    'color_depths' => [
        'text_over_dark'              => '100', // Number or white
        'text_over_light'             => '900', // Number or black
        'dark-background'             => '600',
        'dark-background-hover'       => '500',
        'dark-background-active'      => '700',
        'dark-border'                 => '800',
        'light-background'            => '100',
        'light-background-hover'      => '50',
        'light-background-active'     => '200',
        'light-border'                => '300',
    ],
];
