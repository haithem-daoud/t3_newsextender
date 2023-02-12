<?php
defined('TYPO3_MODE') || die();

// Extend News Extension
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('news')) {
    // Extend News Model
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 't3_newsextender';

    // Extend News Repository
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['GeorgRinger\\News\\Domain\\Repository\\NewsRepository'] = array(
        'className' => 'TYPO3\\T3Newsextender\\Domain\\Repository\\NewsRepository'
    );

    // Extend News Controller
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['GeorgRinger\\News\\Controller\\NewsController'] = array(
        'className' => 'TYPO3\\T3Newsextender\\Controller\\NewsController'
    );

    // Extend Language file
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang_db.xlf'][]
        = 'EXT:t3_newsextender/Resources/Private/Language/locallang_db.xlf';
}
