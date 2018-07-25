<?php

return [


    'driver' => env('SCOUT_DRIVER', 'algolia'),



    'prefix' => env('SCOUT_PREFIX', ''),



    'queue' => env('SCOUT_QUEUE', true),


    'chunk' => [
        'searchable' => 500,
        'unsearchable' => 500,
    ],



    'soft_delete' => false,



    'algolia' => [
        'id' => env('ALGOLIA_APP_ID', 'X6QEDZPSSV'),
        'secret' => env('ALGOLIA_SECRET', 'c593d8da38e2ae02bbd69c118ab01fc1'),
    ],

];
