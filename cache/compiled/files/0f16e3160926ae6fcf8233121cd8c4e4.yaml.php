<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/user/themes/big-picture/blueprints/modular/gallery.yaml',
    'modified' => 1557140952,
    'data' => [
        'title' => 'Gallery',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'images' => [
                            'type' => 'tab',
                            'title' => 'Images',
                            'fields' => [
                                'header.thumbnail_max_width' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'Thumbnail\'s Max Width',
                                    'help' => 'Min value 360, max value 1000.',
                                    'default' => 540,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 360,
                                        'max' => 1000
                                    ]
                                ],
                                'header.thumbnail_max_height' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'Thumbnail\'s Max Height',
                                    'help' => 'Min value 360, max value 1000.',
                                    'default' => 540,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 360,
                                        'max' => 1000
                                    ]
                                ],
                                'header.images' => [
                                    'name' => 'images',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Images',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title',
                                            'help' => 'Image\'s title.'
                                        ],
                                        '.full' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg'
                                            ],
                                            'label' => 'Full Image',
                                            'help' => 'Full image\'s filename.'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
