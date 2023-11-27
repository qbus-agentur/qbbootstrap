<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Qbus Bootstrap',
    'description' => '',
    'category' => 'templates',
    'author' => 'Benjamin Franzke',
    'author_email' => 'bfr@qbus.de',
    'author_company' => 'Qbus GmbH',
    'state' => 'stable',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid' => '12.4.0-12.4.99',
            'qbtools' => '4.0.0',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'container' => '2.0.0',
            'gridelements' => '3.2.0',
        ],
    ],
    'autoload' => [
        'psr-4' => ['Qbus\\Qbbootstrap\\' => 'Classes'],
    ],
];
