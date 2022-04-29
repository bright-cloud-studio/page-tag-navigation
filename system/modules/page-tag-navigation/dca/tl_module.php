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

/* Add a palette to tl_module */
$GLOBALS['TL_DCA']['tl_module']['palettes']['page_tag_navigation_module'] 				= '{title_legend},name,headline,type;{template_legend:hide},customTpl;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['page_tag_navigation_target_module'] 		= '{title_legend},name,headline,type;{template_legend:hide},customTpl;{expert_legend:hide},guests,cssID,space';
