<?php

/**
 * Bright Cloud Studio's Page Tag Navigation
 *
 * Copyright (C) 2022 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/page-tag-navigation
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

$GLOBALS['TL_LANG']['MOD']['page-tag-navigation'][0] = "Page Tag Navigation";

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

/* Front end modules */
$GLOBALS['FE_MOD']['page-tag-navigation']['page_tag_navigation_module'] 	= 'Bcs\Module\PageTagNavigationModule';

/* Models */
$GLOBALS['TL_MODELS']['tl_parent_category'] = 'Bcs\Model\ParentCategory';
$GLOBALS['TL_MODELS']['tl_child_category'] = 'Bcs\Model\ChildCategory';
