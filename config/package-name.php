<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Name Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for the PackageName package.
    | You can publish this file with:
    |   php artisan vendor:publish --tag=package-name-config
    |
    */

    'enabled' => env('PACKAGE_NAME_ENABLED', true),

    'option_one' => env('PACKAGE_NAME_OPTION_ONE', 'default_value'),

    'option_two' => env('PACKAGE_NAME_OPTION_TWO', null),

];
