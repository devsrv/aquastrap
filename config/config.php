<?php

return [
        
    /*
    |--------------------------------------------------------------------------
    | Globally Applied Middlewares
    |--------------------------------------------------------------------------
    |
    | Here you may specify the list of middlewares to be applied globally
    | for each Aquastrap request.
    |
    | Note: Web middleware group is by default applied.
    |
    */

    'middleware' => [],

    /*
    |--------------------------------------------------------------------------
    | Default Encryption Strategy
    |--------------------------------------------------------------------------
    |
    | Each Aquastrap request carries the information about the requested class and
    | it's dependendencies giving you convenient access to any public method of that
    | class. 
    | To keep these data secure Aquastrap send these information as encrypted string 
    | and passes via request header for each network request.
    | By default Laravel's natve Crypt Facade is used, to customize this behavioir 
    | you can supply your own encrypter & Decrypter.
    |
    | Note: the methods should be statically callable on the class & should accept one argument ( string ) only.
    |
    */

    'encryption' => [

        'default' => env('AQUASTRAP_ENCRYPTION', 'native'),

        'strategy' => [
            'native' => [
                'crypter' => \Devsrv\Aquastrap\Crypt\Native\Crypt::class
            ],

            /*
            |--------------------------------------------------------------------------
            | To use Halite, install paragonie/halite & generate an encryption key
            |--------------------------------------------------------------------------
            |
            */
            // 'halite' => [
            //     'key_path' => storage_path('app/aquastrap/encryption.key'),
            //     'crypter' => \Devsrv\Aquastrap\Crypt\Halite\Crypt::class
            // ]
        ]
    ]
];
