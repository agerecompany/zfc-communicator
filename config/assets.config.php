<?php
namespace Agere\Communicator;

return [
    /*'default' => [
        'assets' => [
            //'@cartDefault_css',
            '@scheduler_js',
            '@scheduler_css',
        ],
        'options' => [
            'mixin' => true,
        ],
    ],*/

    'controllers' => [
        'communicator' => [
            '@communicator_css',
            '@communicator_js',
        ],
    ],

    'modules' => [
        __NAMESPACE__ => [
            'root_path' => __DIR__ . '/../view/assets',
            'collections' => [
                'communicator_css' => [
                    'assets' => [
                        'css/dhtmlxscheduler_flat.css',
                        'css/agere.scheduler.css'
                        //'css/dhtmlxscheduler.css',
                    ],
                ],
                'communicator_js' => [
                    'assets' => [
                        'js/dhtmlx//dhtmlxscheduler.js',
                        'js/dhtmlx/dhtmlxscheduler_agenda_view.js',
                        'js/dhtmlx/dhtmlxscheduler_readonly.js',
                        'js/dhtmlx/dhtmlxscheduler_minical.js',
                        'js/dhtmlx/dhtmlxscheduler_pdf.js',
                        'js/dhtmlx/dhtmlxscheduler.js',
                        'js/dhtmlx/dhtmlxscheduler_limit.js',
                        //'js/dhtmlx/dhtmlxscheduler_quick_info.js',
                        'js/dhtmlx/dhtmlxscheduler_year_view.js',
                        'js/dhtmlx/dhtmlxscheduler_active_links.js',
                        'js/agere.scheduler.js',
                    ],
                ],
                'communicator_images' => [
                    'assets' => [
                        'images/*.gif',
                        'images/*.png',
                    ],
                ],
            ],
        ],
    ],
];