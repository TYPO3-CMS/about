<?php
defined('TYPO3_MODE') or die();

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.About',
        'help',
        'about',
        'top',
        [
            'About' => 'index'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:about/Resources/Public/Icons/module-about.svg',
            'labels' => 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.About',
        'help',
        'aboutmodules',
        'after:about',
        [
            'Modules' => 'index'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:about/Resources/Public/Icons/module-aboutmodules.svg',
            'labels' => 'LLL:EXT:about/Resources/Private/Language/Modules/aboutmodules.xlf'
        ]
    );
}
