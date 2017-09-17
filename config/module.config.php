<?php
namespace Popov\ZfcTab;

return [
    'view_manager' => [
        'template_map' => [
            'tab/switcher' => __DIR__ . '/../view/widget/tab/switcher.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

	'service_manager' => [
		//'aliases' => [],
		//'invokables' => [],
		//'factories' => [],

        //'abstract_factories' => [],
	],


    'translator' => [
        'locale' => 'en_GB',
        'translation_file_patterns' => [
            [
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
                'text_domain' => __NAMESPACE__,
            ],
        ],
    ],
    /*'grid_block_config' => [
        'template_map' => [
            'grid/list' => 'Popov/tab/switcher',
        ],
    ],*/

];