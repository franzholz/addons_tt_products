<?php
defined('TYPO3') || die('Access denied.');

call_user_func(function ()
{
    // All these constants are deprecated!

    if (!defined ('ADDONS_TT_PRODUCTS_EXT')) {
        define('ADDONS_TT_PRODUCTS_EXT', 'addons_tt_products');
    }

    if (!defined ('PATH_BE_ADDONS_TT_PRODUCTS')) {
        define('PATH_BE_ADDONS_TT_PRODUCTS', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath(ADDONS_TT_PRODUCTS_EXT));
    }

    if (!defined ('PATH_FE_ADDONS_TT_PRODUCTS_REL')) {
        define('PATH_FE_ADDONS_TT_PRODUCTS_REL', \TYPO3\CMS\Core\Utility\PathUtility::stripPathSitePrefix(PATH_BE_ADDONS_TT_PRODUCTS));
    }

    if (!defined ('PATH_FE_ADDONS_TT_PRODUCTS_ICON_REL')) {
        define('PATH_FE_ADDONS_TT_PRODUCTS_ICON_REL', PATH_FE_ADDONS_TT_PRODUCTS_REL . 'Resources/Public/Images/');
    }
});

