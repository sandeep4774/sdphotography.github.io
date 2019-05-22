<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/user/themes/big-picture/blueprints/modular/info.yaml',
    'modified' => 1557140952,
    'data' => [
        'title' => 'Info',
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
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.heading' => [
                                    'type' => 'text',
                                    'label' => 'Heading',
                                    'help' => 'Section\'s heading.'
                                ],
                                'header.background_image' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ],
                                    'label' => 'Background Image',
                                    'help' => 'Image filename that exists in the page folder.',
                                    'placeholder' => 'For example: myimage.jpg'
                                ],
                                'header.content_position' => [
                                    'type' => 'radio',
                                    'label' => 'Content Position',
                                    'help' => 'The position where the content is shown.',
                                    'options' => [
                                        'left' => 'Left',
                                        'right' => 'Right'
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
