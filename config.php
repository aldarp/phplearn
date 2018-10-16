<?php

return [
    'database' => [
        'name' => 'mytodo',
        'connection' => 'mysql:host=localhost',
        'user' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];



