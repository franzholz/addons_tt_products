<?php
if (!defined ('TYPO3_MODE'))	die ('Access denied.');


$emClass = '\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility';

if (
	class_exists($emClass) &&
	method_exists($emClass, 'extPath')
) {
	// nothing
} else {
	$emClass = 't3lib_extMgm';
}



if (!defined ('ADDONS_TT_PRODUCTS_EXT')) {
	define('ADDONS_TT_PRODUCTS_EXT', $_EXTKEY);
}

if (!defined ('PATH_BE_ADDONS_TT_PRODUCTS')) {
	define('PATH_BE_ADDONS_TT_PRODUCTS', call_user_func($emClass . '::extPath', $_EXTKEY));
}

if (!defined ('PATH_BE_ADDONS_TT_PRODUCTS_REL')) {
	define('PATH_BE_ADDONS_TT_PRODUCTS_REL', call_user_func($emClass . '::extRelPath', $_EXTKEY));
}

if (!defined ('PATH_FE_ADDONS_TT_PRODUCTS_REL')) {
	define('PATH_FE_ADDONS_TT_PRODUCTS_REL', call_user_func($emClass . '::siteRelPath', $_EXTKEY));
}

if (!defined ('PATH_FE_ADDONS_TT_PRODUCTS_ICON_REL')) {
	define('PATH_FE_ADDONS_TT_PRODUCTS_ICON_REL', PATH_FE_ADDONS_TT_PRODUCTS_REL . 'res/icons/fe/');
}





// deprecated constants:
if (!defined ('ADDONS_EXTKEY')) {
	define('ADDONS_EXTKEY', 'addons_tt_products');
}

if (!defined ('PATH_BE_ADDONS')) {
	define('PATH_BE_ADDONS', call_user_func($emClass . '::extPath', $_EXTKEY));
}

if (!defined ('PATH_BE_ADDONS_REL')) {
	define('PATH_BE_ADDONS_REL', call_user_func($emClass . '::extRelPath', $_EXTKEY));
}

if (!defined ('PATH_FE_ADDONS_REL')) {
	define('PATH_BE_ADDONS_REL', call_user_func($emClass . '::siteRelPath', $_EXTKEY));
}

if (!defined ('PATH_FE_ADDONS_ICON_REL')) {
	define('PATH_FE_ADDONS_ICON_REL', PATH_FE_ADDONS_REL . 'res/icons/fe/');
}


if (!defined ('ADDONS_EXTkey')) {
	define('ADDONS_EXTkey','addons_tt_products');
}

if (!defined ('PATH_BE_addons')) {
	define('PATH_BE_addons', call_user_func($emClass . '::extPath', $_EXTKEY));
}

if (!defined ('PATH_BE_addons_rel')) {
	define('PATH_BE_addons_rel', call_user_func($emClass . '::extRelPath', $_EXTKEY));
}

if (!defined ('PATH_FE_addons_rel')) {
	define('PATH_FE_addons_rel', call_user_func($emClass . '::siteRelPath', $_EXTKEY));
}

if (!defined ('PATH_FE_addons_icon_rel')) {
	define('PATH_FE_addons_icon_rel', PATH_FE_addons_rel . 'res/icons/fe/');
}

