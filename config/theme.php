<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Themes namespace
    |--------------------------------------------------------------------------
    |
    | This is the default namespace for the themes
    |
    */
    'namespace' => 'Themes',

    /*
    |--------------------------------------------------------------------------
    | Default active Theme
    |--------------------------------------------------------------------------
    |
    | Default active themeName. like as
    | 'active' => 'themeName',
    |
    */
    'active'     => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Themes path
    |--------------------------------------------------------------------------
    |
    | This path used for save the generated theme. This path also will added
    | automatically to list of scanned folders.
    |
    */
    'path'  => base_path('common/themes'),

    /*
    |--------------------------------------------------------------------------
    | Themes Stubs
    |--------------------------------------------------------------------------
    |
    | Default themes stubs.
    |
    */
    'stubs' => [
        'path' => realpath(LIBRARY_PATH.'/src/Console/stubs'),
        'files'  => [
            'apply'                 => 'apply.json',
            'license'               => 'LICENCE.md',
            'composer'              => 'composer.json',
            'Setup'                 => 'src/Apply/Setup.php',
            'RouteServiceProvider'  => 'src/Providers/RouteServiceProvider.php',
            'AppServiceProvider'    => 'src/Providers/AppServiceProvider.php',
            'Controller'            => 'src/Http/Controllers/Controller.php',
        ],
    ],
];
