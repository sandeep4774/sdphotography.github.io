<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/user/themes/big-picture/blueprints/default.yaml',
    'modified' => 1557140952,
    'data' => [
        'title' => 'Default',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.home_menu_item' => [
                                    'type' => 'text',
                                    'label' => 'THEME_BIG_PICTURE.HOME_MENU_ITEM',
                                    'description' => 'THEME_BIG_PICTURE.HOME_MENU_ITEM_HELP',
                                    'help' => 'THEME_BIG_PICTURE.HOME_MENU_ITEM_HELP'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
