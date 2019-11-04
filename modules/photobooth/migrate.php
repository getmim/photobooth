<?php

return [
    'Photobooth\\Model\\Photobooth' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [],
                'index' => 3000
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'length' => 25,
                'attrs' => [],
                'index' => 4000
            ],
            'images' => [
                'comment' => 'Ex: ["file.ext","file.ext", ...]',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 5000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ]
    ]
];