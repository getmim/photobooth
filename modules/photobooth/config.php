<?php

return [
    '__name' => 'photobooth',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/photobooth.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/photobooth' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-user' => NULL
            ],
            [
                'lib-media' => NULL 
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Photobooth\\Model' => [
                'type' => 'file',
                'base' => 'modules/photobooth/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'photobooth' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'fullname' => [
                    'type' => 'text'
                ],
                'phone' => [
                    'type' => 'text'
                ],
                'images' => [
                    'type' => 'media-list',
                    'separator' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
