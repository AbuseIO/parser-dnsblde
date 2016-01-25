<?php

return [
    'parser' => [
        'name'          => 'DNSBLDE',
        'enabled'       => true,
        'sender_map'    => [
            '/@mailpit.powerweb.de/',
        ],
        'body_map'      => [
            //
        ],
    ],

    'feeds' => [
        'default' => [
            'class'     => 'SPAM',
            'type'      => 'ABUSE',
            'enabled'   => true,
            'fields'    => [
                'Source-IP',
                'Feedback-Type',
                'Received-Date',
            ],
        ],

    ],
];
