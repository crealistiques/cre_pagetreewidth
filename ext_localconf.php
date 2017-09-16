<?php

/**
 * Register hook to include css styles for manipulating the page tree width
 */
if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook']['cre_pagetreewidth'] =
        \Crealistiques\CrePagetreewidth\Hooks\UserSettings\UserSettingsConf::class . '->preStartPageHook';
}
