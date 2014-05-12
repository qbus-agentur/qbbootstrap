<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Qbus Bootstrap');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider'][$_EXTKEY] = 'Qbus\\Qbbootstrap\\Hooks\\Options\\BackendLayoutDataProvider';

?>
