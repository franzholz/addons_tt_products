<?php
if (!defined ('TYPO3_MODE'))	die ('Access denied.');

if (!defined ('ADDONS_EXTKEY')) {
	define('ADDONS_EXTKEY','addons_tt_products');
}

if (!defined ('PATH_BE_ADDONS')) {
	define('PATH_BE_ADDONS', t3lib_extMgm::extPath(ADDONS_EXTKEY));
}

if (!defined ('PATH_BE_ADDONS_REL')) {
	define('PATH_BE_ADDONS_REL', t3lib_extMgm::extRelPath(ADDONS_EXTKEY));
}

if (!defined ('PATH_FE_ADDONS_REL')) {
	define('PATH_FE_ADDONS_REL', t3lib_extMgm::siteRelPath(ADDONS_EXTKEY));
}

if (!defined ('PATH_FE_ADDONS_ICON_REL')) {
	define('PATH_FE_ADDONS_ICON_REL', PATH_FE_ADDONS_REL . 'res/icons/fe/');
}





// deprecated constants:
if (!defined ('ADDONS_EXTkey')) {
	define('ADDONS_EXTkey','addons_tt_products');
}

if (!defined ('PATH_BE_addons')) {
	define('PATH_BE_addons', t3lib_extMgm::extPath(ADDONS_EXTkey));
}

if (!defined ('PATH_BE_addons_rel')) {
	define('PATH_BE_addons_rel', t3lib_extMgm::extRelPath(ADDONS_EXTkey));
}

if (!defined ('PATH_FE_addons_rel')) {
	define('PATH_FE_addons_rel', t3lib_extMgm::siteRelPath(ADDONS_EXTkey));
}

if (!defined ('PATH_FE_addons_icon_rel')) {
	define('PATH_FE_addons_icon_rel', PATH_FE_addons_rel . 'res/icons/fe/');
}

?>