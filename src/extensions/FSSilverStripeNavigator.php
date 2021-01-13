<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FSCMS;

use SilverStripe\CMS\Controllers\SilverStripeNavigator;
use SilverStripe\CMS\Controllers\SilverStripeNavigatorItem_LiveLink;

/**
 * Description of FSSilverStripeNavigator
 *
 * @author fang
 */
class FSSilverStripeNavigator extends SilverStripeNavigator {
    
    /**
     * Function is to check if show preview switch
     * @return boolean
     */
    public function isShowPreviewSwitch(){
        
        if(FSLeftAndMainExtension::is_default_admin_loggedin()){
            return TRUE;
        }
        
        return FALSE;
    }
    
    
    /**
     * Function is to get live item
     * @return SilverStripeNavigatorItem_LiveLink
     */
    public function getLiveItem(){
        $item = new SilverStripeNavigatorItem_LiveLink($this->record);
        return $item;
    }
    
}
