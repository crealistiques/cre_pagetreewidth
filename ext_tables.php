<?php

/*
 * Add field cre_pagetreewidth to user settings
 */
$GLOBALS['TYPO3_USER_SETTINGS']['columns']['cre_pagetreewidth'] = array(
    'label' => 'LLL:EXT:cre_pagetreewidth/Resources/Private/Language/Backend.xlf:pagetreewidth',
    'type' => 'text',
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToUserSettings(
    'cre_pagetreewidth',
    'after:titleLen'
);

/*
 * Add field cre_pagetreewidth to user settings
 */
$GLOBALS['TYPO3_USER_SETTINGS']['columns']['cre_pagetreewidth_dialogFlexibleWidth'] = array(
    'label' => 'LLL:EXT:cre_pagetreewidth/Resources/Private/Language/Backend.xlf:dialogFlexibleWidth',
    'type' => 'check',
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToUserSettings(
    'cre_pagetreewidth_dialogFlexibleWidth',
    'after:cre_pagetreewidth'
);
