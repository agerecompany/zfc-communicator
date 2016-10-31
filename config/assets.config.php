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
                        'css/dhtmlx/dhtmlxscheduler_flat.css',
                        //'css/dhtmlx/dhtmlxscheduler.css',
                        'css/agere.scheduler.css'
                    ],
                ],
                'communicator_js' => [
                    'assets' => [
                        'js/dhtmlx/dhtmlxscheduler.js',
                        'js/dhtmlx/dhtmlxscheduler_readonly.js',
                        'js/dhtmlx/dhtmlxscheduler_minical.js',
                        'js/dhtmlx/dhtmlxscheduler_pdf.js',
                        'js/dhtmlx/locale/locale_ru.js',
                        'js/dhtmlx/dhtmlxscheduler_active_links.js',
                        'js/dhtmlx/dhtmlxscheduler_limit.js',
                        'js/agere.scheduler.js',

                        /*'js/dhtmlx/dhtmlxscheduler_readonly.js',
                        'js/dhtmlx/dhtmlxscheduler_agenda_view.js',
                        'js/dhtmlx/dhtmlxscheduler_minical.js',
                        'js/dhtmlx/dhtmlxscheduler_pdf.js',
                        'js/dhtmlx/dhtmlxscheduler.js',
                        'js/dhtmlx/dhtmlxscheduler_limit.js',
                        'js/dhtmlx/dhtmlxscheduler_quick_info.js',
                        'js/dhtmlx/dhtmlxscheduler_year_view.js',
                        'js/dhtmlx/dhtmlxscheduler_active_links.js',
                        'js/agere.scheduler.js',
                        'js/dhtmlx/locale/locale_ru.js',*/
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