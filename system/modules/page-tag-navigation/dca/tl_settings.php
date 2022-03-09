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


$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace(';{date_legend', ';{page_tag_navigation_default_legend},parentDefault,childDefault;{date_legend', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);


/* Article Fields */
$GLOBALS['TL_DCA']['tl_settings']['fields']['parentDefault'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['parentDefault'],
	'inputType'               => 'text',
    'default'		          => 'I am...',
    'search'                  => true,
    'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['childDefault'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['childDefault'],
    'inputType'               => 'text',
    'default'		          => 'Im looking for...',
    'search'                  => true,
    'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
