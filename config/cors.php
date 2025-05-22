<?php
return [

    'paths' => ['api/*', 'login', 'logout', '*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:5173','https://elaborate-zabaione-974fd0.netlify.app'], // ou remplace par ['https://ton-front.netlify.app'] si tu veux sécuriser

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];


