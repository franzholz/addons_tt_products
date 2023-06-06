<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Franz Holzinger (franz@ttproducts.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Part of the addons_tt_products (Addons to the Shop System) extension.
 *
 * TypoScript functions for the basket
 *
 * @author  Franz Holzinger <franz@ttproducts.de>
 * @maintainer	Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage tt_products
 *
 */

public function user_onlyBulkilyItems ($where) {

    $cObj = GeneralUtility::makeInstance(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class)

    $basketExt = $GLOBALS['TSFE']->fe_user->getKey('ses', 'basketExt');

    if (isset($basketExt) && is_array($basketExt))	{

        $uidArr = [];

        foreach($basketExt as $uidTmp => $tmp)	{
            if ($uidTmp != 'gift' && !in_array($uidTmp, $uidArr))	{
                $uidArr[] = intval($uidTmp);
            }
        }

        if (count($uidArr) == 0) {
            return false;
        }
        $where = 'uid IN (' . implode(',', $uidArr) . ')';
    }

    $where .= $cObj->enableFields('tt_products');

    $rcArray = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows('*', 'tt_products', $where);

    $bAllBukily = true;
    foreach ($rcArray as $uid => $row)	{
        if (!$row['special_preparation']) {
            $bAllBukily = false;
            break;
        }
    }

    return ($bAllBukily);
}

