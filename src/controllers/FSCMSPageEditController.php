<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FSCMS;

use SilverStripe\CMS\Controllers\CMSPageEditController;
use SilverStripe\ORM\CMSPreviewable;

/**
 * Description of FSCMSMain
 *
 * @author fang
 */
class FSCMSPageEditController extends CMSPageEditController {
    
    
    private static $allowed_actions = array(
        'treeview'
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
     * Function is to re-set EditForm
     * @param type $id
     * @param type $fields
     * @return type
     */
    public function getEditForm($id = null, $fields = null) {
        $form = parent::getEditForm($id, $fields);
        
        //To get actions
        $actions = $form->Actions();
        
        if(!$this->isDefaultAdminLoggedIn()){
            //To remove actions
            $actions->removeByName("action_save");
            $actions->removeByName("ActionMenus");
        }
        
        return $form;
    }
    
    
    /**
     * OVERRIDE
     * @return type
     */
    public function getSilverStripeNavigator() {
        
        $page = $this->currentPage();
        
        if ($page instanceof CMSPreviewable) {
            $navigator = new FSSilverStripeNavigator($page);
            
            return $navigator->renderWith($this->getTemplatesWithSuffix('_SilverStripeNavigator'));
        }
        return null;
    }
    
    
    
}
