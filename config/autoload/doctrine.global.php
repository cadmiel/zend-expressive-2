<?php

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'host' => 'hostBaseDeDado',
                    'port' => '3306',
                    'user' => 'usuarioBaseDeDado',
                    'password' => 'SenhaBaseDeDado',
                    'dbname' => 'nomeBaseDeDado',
                    'driverOptions' => [
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    ]
                ]
            ]
        ],
        'driver' => [
            'App_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [__DIR__ . '/../../src/TExAPITest/src/Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    'TExAPITest\Entity' => 'App_driver'
                ]
            ]
        ]
    ]
];