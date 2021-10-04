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
    'version' => '1.4.4',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-11.5.99',
            'fluid' => '7.6.0-11.5.99',
            'qbtools' => '1.4.0',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
            'container' => '1.0.0',
            'gridelements' => '3.2.0',
        ),
    ),
    'autoload' => array(
        'psr-4' => array('Qbus\\Qbbootstrap\\' => 'Classes')
    ),
);
