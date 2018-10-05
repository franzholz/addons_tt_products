# TYPO3 extension addons_tt_products

## What is does

This extension provides many example shop template files for tt_products. 
Use these templates for starting with the shop system tt_products.

Use the forum at https://www.jambage.com to ask questions and find answers.
A documentation manual.sxw is available in the doc folder.

You can use these example templates and icons in tt_products 2.8.1 or higher.

Get the next versions of tt_products from this online shop:
http://ttproducts.de

pob_ttp_marker_xml.htm: multiple language marker template sponsored by Rainer Lindner (pob.com)
products_css_de.html: CSS template by Robert Markula, translated by Masod Mohmand

The folder Resources/Private/Extensions/Tt_products/Templates/ contains responsive template files based on the code of the plugin.
The folder template/typo3webshop contains the files for the book "Der TYPO3-Webshop" by Andrea Herzog-Kienast.


## Example Constants:

    plugin.tt_products {
      file.templateFile = EXT:addons_tt_products/template/example_template_bill_de.tmpl
    }

## Example Setup:

(tt_products 2.12.0 and 3.0.0):

    plugin.tt_products.templateFile = fileadmin/typo3webshop/page/html/tt_products/products_css_variants_de.html

    plugin.tt_products.templateFile {
      BASKET =   fileadmin/typo3webshop/page/html/tt_products/basket.html
      OVERVIEW = fileadmin/typo3webshop/page/html/tt_products/overview.html
      ERROR =    fileadmin/typo3webshop/page/html/tt_products/errors.html
      FINALIZE = fileadmin/typo3webshop/page/html/tt_products/orderconfirmation.html
      INFO =     fileadmin/typo3webshop/page/html/tt_products/info.html
      LIST =     fileadmin/typo3webshop/page/html/tt_products/list.html
      PAYMENT =  fileadmin/typo3webshop/page/html/tt_products/payment.html
      SINGLE =   fileadmin/typo3webshop/page/html/tt_products/single.html
      TRACKING = fileadmin/typo3webshop/page/html/tt_products/tracking.html
      MEMO =     fileadmin/typo3webshop/page/html/tt_products/memo.html
    }


## Contributions:

Please join the team to further develop these templates at https://github.com/franzholz/addons_tt_products .
Send us your shop templates and icons to collect them here.


