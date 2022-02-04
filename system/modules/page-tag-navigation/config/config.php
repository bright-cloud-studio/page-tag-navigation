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


// This sets up our custom section "PANEL PRICING CALCULATOR"
$GLOBALS['TL_LANG']['MOD']['page-tag-navigation'][0] = "Page Tag Navigation";

// Adds "Panel Pricing Calculator" to our custom section
$GLOBALS['BE_MOD']['page-tag-navigation']['parent_category'] = array(
	'tables' => array('tl_parent_category'),
	'icon'   => 'system/modules/page-tag-navigation/assets/icons/page_tag_navigation.png',
	'exportLocations' => array('Bcs\Backend\ParentCategoryBackend', 'exportParentCategory')
);
$GLOBALS['BE_MOD']['page-tag-navigation']['child_category'] = array(
	'tables' => array('tl_child_category'),
	'icon'   => 'system/modules/page-tag-navigation/assets/icons/page_tag_navigation.png',
	'exportLocations' => array('Bcs\Backend\ChildCategoryBackend', 'exportChildCategory')
);

/* Models */
$GLOBALS['TL_MODELS']['tl_parent_category'] = 'Bcs\Model\ParentCategory';
$GLOBALS['TL_MODELS']['tl_child_category'] = 'Bcs\Model\ChildCategory';
