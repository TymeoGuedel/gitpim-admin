<?php

return [
    'paths' => ['api/*', 'login'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173', 'https://elaborate-zabaione-974fd0.netlify.app/'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
