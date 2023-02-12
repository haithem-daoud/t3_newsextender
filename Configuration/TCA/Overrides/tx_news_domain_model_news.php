<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Add new field
$tempColumns = [
    "newfield" => [
        "exclude" => true,
        "label" => "New Field",
        "config" => [
            "type" => "input",
            "size" => "30",
            "eval" => "trim"
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns("tx_news_domain_model_news", $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news','newfield','','');