<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem('tt_content', 'CType', array(
    'Bildergalerie',
    'qbbootstrap_gallery',
    'i/tt_content_image.gif',
), 'textpic', 'after');

if (version_compare(TYPO3_branch, '9.5', '<')) {
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap_gallery']['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.header;header,  image, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.imagelinks;imagelinks, layout, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended, --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category, categories, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns';
} else {
    $GLOBALS['TCA']['tt_content']['types']['qbbootstrap_gallery']['showitem'] = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, image, --palette--;;imagelinks, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns';

}

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['qbbootstrap_gallery'] = 'mimetypes-x-content-image';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicons']['qbbootstrap_gallery'] = 'tt_content_image.gif';
