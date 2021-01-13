<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace FSCMS;

use SilverStripe\CMS\Controllers\CMSPagesController;

/**
 * Description of FSCMSPagesControllerExtension
 *
 * @author fang
 */
class FSCMSPagesController extends CMSPagesController {
    
    
    private static $allowed_actions = array(
        'treeview',
        'listview'
    );
    
    /**
     * OVERRIDE
     * @return string HTML
     */
    public function treeview() {
        return $this->renderWith("FSCMS\\Includes\\FSCMSMain_TreeView");
    }
    
    /**
     * OVERRIDE
     * @return string HTML
     */
    public function listview() {
        return $this->renderWith("FSCMS\\Includes\\FSCMSMain_ListView");
    }
    
    
}
