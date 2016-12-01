<?php
namespace Agere\Communicator;

return [

    'assetic_configuration' => require_once 'assets.config.php',

    'communicator' => [
        'table' => 'communicator',
        'columns' => [
            'start_date',
            'end_date',
            'description',
            'subject',
        ]
        /*'columns' => [
            'start_date',
            'end_date',
            'text',
            'subject',
            'test1',
            'test2'
        ]*/
    ],

    'controllers' => [
        'aliases' => [
            'communicator' => Controller\IndexController::class,
        ],
        'factories' => [
            Controller\IndexController::class => Controller\Factory\IndexControllerFactory::class,
        ],
    ],

    'service_manager' => [
        'aliases' => [
            'CommunicatorService' => Service\CommunicatorService::class,

        ],
        'invokables' => [
            Service\CommunicatorService::class => Service\CommunicatorService::class,
        ],
        'factories' => [
            Listener\CreateVisitListener::class => Listener\Factory\CreateVisitListenerFactory::class,
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            __NAMESPACE__ => __DIR__ . '/../view',
        ],
    ],

    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Model'],
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Model' => __NAMESPACE__ . '_driver',
                ],
            ],
        ],
    ],
];