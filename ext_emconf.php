<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Qbus Bootstrap',
    'description' => '',
    'category' => 'templates',
    'author' => 'Benjamin Franzke',
    'author_email' => 'bfr@qbus.de',
    'author_company' => 'Qbus GmbH',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.2.3',
    'constraints' => array(
        'depends' => array(
            'extbase' => '7.6.0-10.4.99',
            'fluid' => '7.6.0-10.4.99',
            'typo3' => '7.6.0-10.4.99',
            'gridelements' => '3.2.0',
            'qbtools' => '1.4.0',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
