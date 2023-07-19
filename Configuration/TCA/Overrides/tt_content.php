<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem('tt_content', 'CType', [
    'Bildergalerie',
    'qbbootstrap_gallery',
    'content-image',
], 'textpic', 'after');

$GLOBALS['TCA']['tt_content']['types']['qbbootstrap_gallery']['showitem'] = str_replace(
    [
        '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,',
        '--palette--;;mediaAdjustments,',
        '--palette--;;gallerySettings,',
    ],
    '',
    $GLOBALS['TCA']['tt_content']['types']['image']['showitem']
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['qbbootstrap_gallery'] = 'mimetypes-x-content-image';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container', // CType
            'Container',
            'Verwendbar als Rahmen oder als Wrapper für Elemente in Accordions oder Tab-Rastern.',
            [
                [
                    ['name' => 'Container Inhalt', 'colPos' => 200],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/container.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'] = '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;headers,
                --palette--;;frames,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container-50-50', // CType
            'Zweispaltig 50:50', // label
            '', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 201],
                    ['name' => 'Rechts', 'colPos' => 202],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/50-50.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container-50-50']['showitem'] =
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container-33-66', // CType
            'Zweispaltig 33:66', // label
            '', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 201],
                    ['name' => 'Rechts', 'colPos' => 202],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/33-66.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container-33-66']['showitem'] =
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container-66-33', // CType
            'Zweispaltig 66:33', // label
            '', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 201],
                    ['name' => 'Rechts', 'colPos' => 202],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/66-33.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container-66-33']['showitem'] =
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container-75-25', // CType
            'Zweispaltig 75:25', // label
            '', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 201],
                    ['name' => 'Rechts', 'colPos' => 202],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/75-25.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container-75-25']['showitem'] =
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container-33-33-33', // CType
            'Dreispaltig 33:33:33', // label
            '', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 201],
                    ['name' => 'Mitte', 'colPos' => 200],
                    ['name' => 'Rechts', 'colPos' => 202],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/33-33-33.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container-33-33-33']['showitem'] =
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container-25-50-25', // CType
            'Dreispaltig 25:50:25', // label
            '', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 201],
                    ['name' => 'Mitte', 'colPos' => 200],
                    ['name' => 'Rechts', 'colPos' => 202],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/25-50-25.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container-25-50-25']['showitem'] =
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-container-25-25-25-25', // CType
            'Vierspaltig 25:25:25:25', // label
            '', // description
            [
                [
                    ['name' => 'Links', 'colPos' => 200],
                    ['name' => 'Mitte Links', 'colPos' => 201],
                    ['name' => 'Mitte Rechts', 'colPos' => 202],
                    ['name' => 'Rechts', 'colPos' => 203],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/25-25-25-25.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container-25-25-25-25']['showitem'] =
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap-container']['showitem'];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-accordion', // CType
            'Accordion Gruppe', // label
            '', // description
            [
                [
                    ['name' => 'Accordion Gruppe', 'colPos' => 200, 'allowed' => ['CType' => 'textmedia,text,textpic,gridelements_pi1,qbbootstrap_gallery,list']],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/accordion.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-accordion']['showitem'] = '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;headers,
                pi_flexform,
                --palette--;;frames,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:qbbootstrap/Configuration/FlexForms/Accordion.xml',
    'qbbootstrap-accordion'
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-carousel', // CType
            'Carousel', // label
            '', // description
            [
                [
                    ['name' => 'Carousel', 'colPos' => 200, 'allowed' => ['CType' => 'textmedia,text,textpic,gridelements_pi1,qbbootstrap_gallery,list']],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/carousel.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-accordion']['showitem'] = '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;headers,
                pi_flexform,
                --palette--;;frames,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:qbbootstrap/Configuration/FlexForms/Carousel.xml',
    'qbbootstrap-carousel'
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'qbbootstrap-tabs-container', // CType
            'Tabs Container', // label
            'Ein Element das mehrere Tabs enthält', // description
            [
                [
                    ['name' => 'Tabs Container', 'colPos' => 200],
                ],
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:qbbootstrap/Resources/Public/Icons/tabs.png')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['qbbootstrap-accordion']['showitem'] = '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;headers,
                pi_flexform,
                --palette--;;frames,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:qbbootstrap/Configuration/FlexForms/Tabs.xml',
    'qbbootstrap-tabs-container'
);
