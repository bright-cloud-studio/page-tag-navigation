<?php

/**
 * Panel Pricing Calculator - Adds a panel pricing calculator with a front end module for users and a back end system for managing the data.
 *
 * Copyright (C) 2021 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/panel-pricing-calculator
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Bcs\Module\PanelPricingCalculatorModule' 	=> 'system/modules/panel_pricing_calculator/library/Bcs/Module/PanelPricingCalculatorModule.php',
	'Bcs\Model\PanelPricingCalculator' 		=> 'system/modules/panel_pricing_calculator/library/Bcs/Model/PanelPricingCalculator.php',
	'Bcs\Backend\PriceChartBackend' 		=> 'system/modules/panel_pricing_calculator/library/Bcs/Backend/PriceChartBackend.php',
	'Bcs\Backend\PriceChartLargeBackend' 		=> 'system/modules/panel_pricing_calculator/library/Bcs/Backend/PriceChartLargeBackend.php',
	'Bcs\Backend\CradlePricesBackend' 		=> 'system/modules/panel_pricing_calculator/library/Bcs/Backend/CradlePricesBackend.php',
	'Bcs\Backend\QuoteRequestBackend' 		=> 'system/modules/panel_pricing_calculator/library/Bcs/Backend/QuoteRequestBackend.php'
));

/* Register the templates */
TemplateLoader::addFiles(array
(
	'panel_pricing_calculator_module'			=> 'system/modules/panel_pricing_calculator/templates/modules'
));
