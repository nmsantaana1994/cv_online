<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Would you like the install button to appear on all pages?
      Set true/false
    |--------------------------------------------------------------------------
    */

    'install-button' => true,

    /*
    |--------------------------------------------------------------------------
    | PWA Manifest Configuration
    |--------------------------------------------------------------------------
    |  php artisan erag:pwa-update-manifest
    */

    'manifest' => [
        'name'             => 'CV Nicolás Santa Ana',
        'short_name'       => 'NicoDev',
        'description'      => 'CV digital de Nicolás Santa Ana – Senior Full Stack Developer & Freelance',
        'start_url'        => '/?utm_source=pwa',
        'display'          => 'standalone',
        'background_color' => '#ffffff',
        'theme_color'      => '#0d6efd',
        'icons'            => [
            '192x192' => '/icons/icon-192x192.png',
            '512x512' => '/icons/icon-512x512.png',
        ],
        // Agrega esto:
        'screenshots'      => [
            [
                'src'         => '/screenshots/home-desktop.png',
                'sizes'       => '1280x720',
                'type'        => 'image/png',
                'form_factor' => 'wide',
            ],
            [
                'src'   => '/screenshots/home-mobile.png',
                'sizes' => '375x812',
                'type'  => 'image/png',
                // form_factor no es obligatorio aquí
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug Configuration
    |--------------------------------------------------------------------------
    | Toggles the application's debug mode based on the environment variable
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Livewire Integration
    |--------------------------------------------------------------------------
    | Set to true if you're using Livewire in your application to enable
    | Livewire-specific PWA optimizations or features.
    */

    'livewire-app' => false,
];
