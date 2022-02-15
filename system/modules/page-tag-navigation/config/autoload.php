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
	'Bcs\Model\PageTagNavigation' 			=> 'system/modules/page-tag-navigation/library/Bcs/Model/PageTagNavigation.php',
	'Bcs\Backend\ParentCategoryBackend' 		=> 'system/modules/page-tag-navigation/library/Bcs/Backend/ParentCategoryBackend.php',
	'Bcs\Backend\ChildCategoryBackend' 		=> 'system/modules/page-tag-navigation/library/Bcs/Backend/ChildCategoryBackend.php',
	'Bcs\Module\PageTagNavigationModule' 		=> 'system/modules/page-tag-navigation/library/Bcs/Module/PageTagNavigationModule.php',
));

/* Register the templates */
TemplateLoader::addFiles(array
(
	'page_tag_navigation_module' 		=> 'system/modules/page-tag-navigation/templates/modules',
	'dropdown_parent' 			=> 'system/modules/page-tag-navigation/templates/dropdowns',
	'dropdown_child' 			=> 'system/modules/page-tag-navigation/templates/dropdowns',
));
