<?php
namespace Crealistiques\CrePagetreewidth\Hooks\UserSettings;

use TYPO3\CMS\Backend\Template\DocumentTemplate;


class UserSettingsConf
{

    /**
     * Include backend user specific styles for backend page tree width manipulation
     *
     * @param array $params
     * @param DocumentTemplate $pObj
     * @return void
     */
    public function preStartPageHook(array &$params, &$pObj)
    {
        if (!isset($GLOBALS['BE_USER'])) {
            return;
        }

        $ucPageTreeWidth = intval($GLOBALS['BE_USER']->uc['cre_pagetreewidth']);
        $pageTreeWidth = $ucPageTreeWidth ? $ucPageTreeWidth : null;

        $ucDialogPageTreeFlexibleWidth = intval($GLOBALS['BE_USER']->uc['cre_pagetreewidth_dialogFlexibleWidth']);
        $dialogPageTreeFlexibleWidth = $ucDialogPageTreeFlexibleWidth ? $ucDialogPageTreeFlexibleWidth : null;

        $addCSS = "";

        if ($pageTreeWidth !== null) {
            $addCSS = ' 
                @media (min-width: 992px) {
                    .scaffold-content-navigation,
                    #typo3-pagetree > .x-panel-bwrap > .x-panel-body > .x-panel-noborder[style],
                    #typo3-pagetree > .x-panel-bwrap > .x-panel-body > .x-panel-noborder > .x-panel-bwrap > .x-panel-body[style],
                    #typo3-pagetree-topPanelItems[style],
                    #typo3-pagetree-topPanelItems > .x-panel-bwrap > .x-panel-body[style],
                    #typo3-pagetree-treeContainer[style],
                    #typo3-pagetree-treeContainer > .x-panel-bwrap[style],
                    #typo3-pagetree-treeContainer > .x-panel-bwrap > .x-panel-body[style]
                    {
                        width: ' . $pageTreeWidth . 'px !important;
                    }
                
                    .scaffold-content-navigation-expanded .scaffold-content-module {
                        left: ' . $pageTreeWidth . 'px !important;
                    }
                }
            ';
        }

        if ($dialogPageTreeFlexibleWidth !== null) {
            $addCSS .= ' 
                @media (min-width: 600px) {
                    .element-browser-main-sidebar
                    {
                        width: auto !important;
                        max-width: 50%
                    }
                }
                @media (min-width: 992px) {
                    .element-browser-main-sidebar
                    {
                        width: auto !important;
                        max-width: 66%
                    }
                }
        ';
        }

        if ($addCSS !== "") {
            $pObj->inDocStylesArray['cre_pagetreewidth'] = $addCSS;
        }
    }
}
