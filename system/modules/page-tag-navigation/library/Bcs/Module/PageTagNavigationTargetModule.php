<?php

/**
 * Bright Cloud Studio's Modal Gallery
 *
 * Copyright (C) 2021 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/modal-gallery
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

  
namespace Bcs\Module;
 
use Bcs\Model\ChildCategory;
use Bcs\Model\ParentCategory;
 
class PageTagNavigationTargetModule extends \Contao\Module
{
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_page_tag_navigation_target';
 
	protected $arrStates = array();
 
	/**
	 * Initialize the object
	 *
	 * @param \ModuleModel $objModule
	 * @param string       $strColumn
	 */
	public function __construct($objModule, $strColumn='main')
	{
		parent::__construct($objModule, $strColumn);
		//$this->arrStates = Locations::getStates();
	}
	
    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['page_tag_navigation'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;
 
            return $objTemplate->parse();
        }
 
        return parent::generate();
    }
 
 
    /**
     * Generate the module
     */
    protected function compile()
    {
        // Add our js
        $js_v = rand(111111,999999);
        $GLOBALS['TL_BODY'][] = '<script src="system/modules/page-tag-navigation/assets/js/page_tag_navigation_target.js?v='.$rand_id.'"></script>';
        
        // Add our css
        $css_v = rand(111111,999999);
        $GLOBALS['TL_CSS'][] = 'system/modules/page-tag-navigation/assets/css/ptn_target.css?v='.$css_v;
        
	}


} 
