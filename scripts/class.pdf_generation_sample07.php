<?php

/* for testing purposes only */

/***************************************************************
*  Copyright notice
*
*  (c) 2015 Franz Holzinger (franz@ttproducts.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * Part of the tt_products (Shop System) extension.
 *
 * functions for the creation of PDF files
 *
 * @author	Franz Holzinger <franz@ttproducts.de>
 * @maintainer	Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage tt_products
 *
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;


class pdf_generation_sample07.php {

	/**
	 * generates the bill as a PDF file
	 *
	 * @param	string		reference to an item array with all the data of the item
	 * @return	string / boolean	returns the absolute filename of the PDF bill or false
	 * 		 			for the tt_producst record, $row
	 * @access private
	 */
	public function generate (
		$cObj,
		$basketView,
		$infoViewObj,
		$templateCode,
		$mainMarkerArray,
		$itemArray,
		$calculatedArray,
		$orderArray,
		$productRowArray,
		$basketExtra,
		$basketRecs,
		$typeCode,
		$generationConf,
		$absFileName
	) {
		$result = false;
// require_once '/path/to/src/PhpWord/Autoloader.php';
// \PhpOffice\PhpWord\Autoloader::register();
		if (is_array($generationConf['handleLib.'])) {
			switch (strtoupper($generationConf['handleLib'])) {
				case 'PHPWORD':
					$path = PATH_site . $generationConf['handleLib.']['path'];
 					GeneralUtility::requireOnce ($path . '/src/PhpWord/Autoloader.php');
					\PhpOffice\PhpWord\Autoloader::register();

					$phpWord = new \PhpOffice\PhpWord\PhpWord();

					$document = $phpWord->loadTemplate($path . '/samples/resources/Sample_07_TemplateCloneRow.docx');

					// Variables on different parts of document
					$document->setValue('weekday', date('l')); // On section/content
					$document->setValue('time', date('H:i')); // On footer
					$document->setValue('serverName', realpath(__DIR__)); // On header

					// Simple table
					$document->cloneRow('rowValue', 20);

					$document->setValue('rowValue#1', 'Sun');
					$document->setValue('rowValue#2', 'Mercury');
					$document->setValue('rowValue#3', 'Venus');
					$document->setValue('rowValue#4', 'Earth');
					$document->setValue('rowValue#5', 'Mars');
					$document->setValue('rowValue#6', 'Jupiter');
					$document->setValue('rowValue#7', 'Saturn');
					$document->setValue('rowValue#8', 'Uranus');
					$document->setValue('rowValue#9', 'Neptun');
					$document->setValue('rowValue#10', 'Pluto');
					$document->setValue('rowValue#11', 'Sun');
					$document->setValue('rowValue#12', 'Mercury');
					$document->setValue('rowValue#13', 'Venus');
					$document->setValue('rowValue#14', 'Earth');
					$document->setValue('rowValue#15', 'Mars');
					$document->setValue('rowValue#16', 'Jupiter');
					$document->setValue('rowValue#17', 'Saturn');
					$document->setValue('rowValue#18', 'Uranus');
					$document->setValue('rowValue#19', 'Neptun');
					$document->setValue('rowValue#20', 'Pluto');

					$document->setValue('rowNumber#1', '1');
					$document->setValue('rowNumber#2', '2');
					$document->setValue('rowNumber#3', '3');
					$document->setValue('rowNumber#4', '4');
					$document->setValue('rowNumber#5', '5');
					$document->setValue('rowNumber#6', '6');
					$document->setValue('rowNumber#7', '7');
					$document->setValue('rowNumber#8', '8');
					$document->setValue('rowNumber#9', '9');
					$document->setValue('rowNumber#10', '10');
					$document->setValue('rowNumber#11', '11');
					$document->setValue('rowNumber#12', '12');
					$document->setValue('rowNumber#13', '13');
					$document->setValue('rowNumber#14', '14');
					$document->setValue('rowNumber#15', '15');
					$document->setValue('rowNumber#16', '16');
					$document->setValue('rowNumber#17', '17');
					$document->setValue('rowNumber#18', '18');
					$document->setValue('rowNumber#19', '19');
					$document->setValue('rowNumber#20', '20');

					// Table with a spanned cell
					$document->cloneRow('userId', 6);

					$document->setValue('userId#1', '1');
					$document->setValue('userFirstName#1', 'James');
					$document->setValue('userName#1', 'Taylor');
					$document->setValue('userPhone#1', '+1 428 889 773');

					$document->setValue('userId#2', '2');
					$document->setValue('userFirstName#2', 'Robert');
					$document->setValue('userName#2', 'Bell');
					$document->setValue('userPhone#2', '+1 428 889 774');

					$document->setValue('userId#3', '3');
					$document->setValue('userFirstName#3', 'Michael');
					$document->setValue('userName#3', 'Ray');
					$document->setValue('userPhone#3', '+1 428 889 775');

					$document->setValue('userId#4', '4');
					$document->setValue('userFirstName#4', 'Sepp');
					$document->setValue('userName#4', 'Joy');
					$document->setValue('userPhone#4', '+1 428 229 775');

					$document->setValue('userId#5', '5');
					$document->setValue('userFirstName#5', 'Hans');
					$document->setValue('userName#5', 'May');
					$document->setValue('userPhone#5', '+1 425 229 322');

					$document->setValue('userId#6', '6');
					$document->setValue('userFirstName#6', 'Franz');
					$document->setValue('userName#6', 'Clay');
					$document->setValue('userPhone#6', '+1 428 229 775');

					$name = 'fileadmin/Sample_07_TemplateCloneRow.docx';
					$document->saveAs($name);

 					GeneralUtility::requireOnce ($path . '/samples/Sample_Footer.php');

					// Finally, write the document:
 					$phpWord = \PhpOffice\PhpWord\IOFactory::load(PATH_site . $name);

					if (is_array($generationConf['handleLib.']['rendererLibrary.'])) {
						$rendererName = \PhpOffice\PhpWord\Settings::PDF_RENDERER_DOMPDF;	//   PDF_RENDERER_MPDF PDF_RENDERER_TCPDF
						$rendererLibraryPath = PATH_site . $generationConf['handleLib.']['rendererLibrary.']['path'];
						\PhpOffice\PhpWord\Settings::setPdfRenderer($rendererName, $rendererLibraryPath);
						$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');
						$objWriter->save('fileadmin/Sample_07_TemplateCloneRow.pdf');

						$result = true;
					}
					break;
				default:
					break;
			}
		}

		return $result;
	}
}

