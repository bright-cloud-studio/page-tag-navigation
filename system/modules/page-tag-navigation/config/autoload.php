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
	'mod_page_tag_navigation' 		=> 'system/modules/page-tag-navigation/templates/modules',
	'item_dropdown_parent' 			=> 'system/modules/page-tag-navigation/templates/items',
	'item_dropdown_child' 			=> 'system/modules/page-tag-navigation/templates/items',
));
