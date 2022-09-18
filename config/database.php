<?php

return [
    'default' => 'neo4j',

    'connections' => [

            'neo4j' => [
                'driver' => 'neo4j',
                'host'   => env('DB_HOST', 'localhost'),
                'port'   => env('DB_PORT', '7474'),
                'username' => env('DB_USERNAME', 'neo4j'),
                'password' => env('DB_PASSWORD', '')
            ]
        ],
    ];
