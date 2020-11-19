<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$GLOBALS['TCA']['sys_redirect']['columns']['inactive_reason'] = [
    'label' => 'LLL:EXT:redirects_healthcheck/Resources/Private/Language/locallang_be.xlf:sys_redirect.inactive_reason',
    'config' => [
        'type' => 'text'
    ]
];

$GLOBALS['TCA']['sys_redirect']['columns']['last_checked'] = [
    'label' => 'LLL:EXT:redirects_healthcheck/Resources/Private/Language/locallang_be.xlf:sys_redirect.last_checked',
    'config' => [
        'type' => 'input',
        'renderType' => 'inputDateTime',
        'size' => 10,
        'eval' => 'datetime',
        'readOnly' => true
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_redirect',
    'visibility',
    '--linebreak--,inactive_reason,last_checked'
);