<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\View\Requirements;

/**
 * Description of FSCMSPageController
 *
 * @author fang
 */
class FSCMSPageController extends ContentController {
    
    /**
     * OVERRIDE
     */
    public function init() {
        parent::init();
        
        Requirements::css("resources/fscms/css/fs-cms-login.css");
    }
    
}
