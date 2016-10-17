<?php
namespace Agere\Communicator;

return [

    'assetic_configuration' => require_once 'assets.config.php',


    'controllers' => [
        'aliases' => [
            'communicator' => Controller\IndexController::class,
        ],
        'invokables' => [
            Controller\IndexController::class => Controller\IndexController::class,

        ],
    ],

	'service_manager' => [
	],

    'view_manager' => [
        'template_path_stack' => [
            __NAMESPACE__ => __DIR__ . '/../view',
        ],
    ],
];