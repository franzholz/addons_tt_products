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
      templatePath = EXT:addons_tt_products/Resources/Private/Templates/
      oldTemplatePath = EXT:addons_tt_products/template/responsive/
      cssPath = EXT:addons_tt_products/Resources/Public/Css/
    }

## Example Setup:

(tt_products 2.12.0 and 3.0.0):

    page.includeCSS {
        tt_products-basket = {$plugin.tt_products.cssPath}basket.css
        tt_products-general = {$plugin.tt_products.cssPath}general.css
        tt_products-info = {$plugin.tt_products.cssPath}info.css
        tt_products-list = {$plugin.tt_products.cssPath}list.css
        tt_products-orderconfirmation = {$plugin.tt_products.cssPath}orderconfirmation.css
        tt_products-overview = {$plugin.tt_products.cssPath}overview.css
        tt_products-payment = {$plugin.tt_products.cssPath}payment.css
        tt_products-single = {$plugin.tt_products.cssPath}single.css
    }

    plugin.tt_products.templateFile = fileadmin/typo3webshop/page/html/tt_products/products_css_variants_de.html

    plugin.tt_products.templateFile {
        BASKET   = {$plugin.tt_products.templatePath}basket.html
        DOWNLOAD = {$plugin.tt_products.templatePath}download.html
        INFO     = {$plugin.tt_products.templatePath}info.html
        FINALIZE = {$plugin.tt_products.templatePath}orderconfirmation.html
        LIST     = {$plugin.tt_products.templatePath}list.html
        OVERVIEW = {$plugin.tt_products.templatePath}overview.html
        PAYMENT  = {$plugin.tt_products.templatePath}payment.html
        SEARCH   = {$plugin.tt_products.templatePath}list.html
        SINGLE   = {$plugin.tt_products.templatePath}single.html
        ERROR =    {$plugin.tt_products.oldTemplatePath}errors.html
        TRACKING = {$plugin.tt_products.oldTemplatePath}tracking.html
        MEMO =     {$plugin.tt_products.oldTemplatePath}memo.html
    }

## Contributions:

Please join the team to further develop these templates at https://github.com/franzholz/addons_tt_products .
Send us your shop templates and icons to collect them here.


