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

 /* Extend the tl_user palettes */
foreach ($GLOBALS['TL_DCA']['tl_page']['palettes'] as $k => $v) {
    $GLOBALS['TL_DCA']['tl_page']['palettes'][$k] = str_replace('regular;', 'regular;{page_tag_navigation_legend},page_tag_navigation_target;', $v);
}


$GLOBALS['TL_DCA']['tl_page']['fields']['page_tag_navigation_target'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['page_tag_navigation_target'],
	'inputType'		=> 'textarea',
	'eval'                	=> [
		'rte'=>'tinyMCE',
		'tl_class'=>'long'
	],
	'sql'                   => "mediumtext NOT NULL default ''"
);
