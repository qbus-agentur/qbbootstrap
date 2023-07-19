<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Qbus Bootstrap',
    'description' => '',
    'category' => 'templates',
    'author' => 'Benjamin Franzke',
    'author_email' => 'bfr@qbus.de',
    'author_company' => 'Qbus GmbH',
    'state' => 'stable',
    'version' => '1.5.5',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-11.5.99',
            'fluid' => '7.6.0-11.5.99',
            'qbtools' => '1.4.0',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'container' => '1.0.0',
            'gridelements' => '3.2.0',
        ],
    ],
    'autoload' => [
        'psr-4' => ['Qbus\\Qbbootstrap\\' => 'Classes'],
    ],
];
