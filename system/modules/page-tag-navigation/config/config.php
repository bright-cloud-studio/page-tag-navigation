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



/* Back end modules */
// DECLARING LOCATIONS BACK END PLUGIN
if (!is_array($GLOBALS['BE_MOD']['panel_pricing_calculator']))
{
    array_insert($GLOBALS['BE_MOD'], 1, array('panel_pricing_calculator' => array()));
}

// This sets up our custom section "PANEL PRICING CALCULATOR"
$GLOBALS['TL_LANG']['MOD']['panel_pricing_calculator'][0] = "Panel Pricing Calculator";
// Adds "Panel Pricing Calculator" to our custom section
$GLOBALS['BE_MOD']['panel_pricing_calculator']['price_chart'] = array(
	'tables' => array('tl_price_chart'),
	'icon'   => 'system/modules/panel_pricing_calculator/assets/icons/panel_pricing_calculator.png',
	'exportLocations' => array('Bcs\Backend\PanelPricingCalculatorBackend', 'exportPanelPricingCalculator')
);
$GLOBALS['BE_MOD']['panel_pricing_calculator']['price_chart_large'] = array(
	'tables' => array('tl_price_chart_large'),
	'icon'   => 'system/modules/panel_pricing_calculator/assets/icons/panel_pricing_calculator.png',
	'exportLocations' => array('Bcs\Backend\PanelPricingCalculatorBackend', 'exportPanelPricingCalculator')
);

$GLOBALS['BE_MOD']['panel_pricing_calculator']['cradle_prices'] = array(
	'tables' => array('tl_cradle_prices'),
	'icon'   => 'system/modules/panel_pricing_calculator/assets/icons/panel_pricing_calculator.png',
	'exportLocations' => array('Bcs\Backend\PanelPricingCalculatorBackend', 'exportPanelPricingCalculator')
);

$GLOBALS['BE_MOD']['panel_pricing_calculator']['quote_request'] = array(
	'tables' => array('tl_quote_request'),
	'icon'   => 'system/modules/panel_pricing_calculator/assets/icons/panel_pricing_calculator.png',
	'exportLocations' => array('Bcs\Backend\PanelPricingCalculatorBackend', 'exportPanelPricingCalculator')
);

/* Front end modules */
$GLOBALS['FE_MOD']['panel_pricing_calculator']['panel_pricing_calculator_module'] 	= 'Bcs\Module\PanelPricingCalculatorModule';


/* Models */
$GLOBALS['TL_MODELS']['tl_panel_pricing_calculator'] = 'Bcs\Model\PanelPricingCalculator';


/* Add Backend CSS to style Reviewed and Unreviewed */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][]					= 'system/modules/panel_pricing_calculator/assets/css/panel_pricing_calculator.css';
}
