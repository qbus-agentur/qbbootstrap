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
    'version' => '1.1.1',
    'constraints' => array(
        'depends' => array(
            'extbase' => '6.0',
            'fluid' => '6.0',
            'typo3' => '6.0',
            'gridelements' => '3.2.0',
            'qbtools' => '1.4.0',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
