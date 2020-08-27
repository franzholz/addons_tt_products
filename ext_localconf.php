<?php
defined('TYPO3_MODE') || die('Access denied.');

$emClass = '\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility';

if (!defined ('ADDONS_TT_PRODUCTS_EXT')) {
    define('ADDONS_TT_PRODUCTS_EXT', 'addons_tt_products');
}

if (!defined ('PATH_BE_ADDONS_TT_PRODUCTS')) {
    define('PATH_BE_ADDONS_TT_PRODUCTS', call_user_func($emClass . '::extPath', ADDONS_TT_PRODUCTS_EXT));
}

if (!defined ('PATH_FE_ADDONS_TT_PRODUCTS_REL')) {
    define('PATH_FE_ADDONS_TT_PRODUCTS_REL', \TYPO3\CMS\Core\Utility\PathUtility::stripPathSitePrefix(PATH_BE_ADDONS_TT_PRODUCTS));
}

if (!defined ('PATH_FE_ADDONS_TT_PRODUCTS_ICON_REL')) {
    define('PATH_FE_ADDONS_TT_PRODUCTS_ICON_REL', PATH_FE_ADDONS_TT_PRODUCTS_REL . 'res/icons/fe/');
}

