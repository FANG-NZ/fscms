<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use SilverStripe\CMS\Model\SiteTree;

/**
 * Description of FS_CMS_Page
 *
 * @author fang
 */
class FSCMSPage extends SiteTree {
    
    /**
     * To setup default logo image,
     * The default image is "FSTUDIO"
     *
     * @config
     * @var string 
     */
    private static $logo_image = "resources/fscms/images/fstudio.png";



    /**
     * Function is to get logoImage path
     * @return type
     */
    public function logoImage(){
        return $this->config()->get("logo_image");
    }
    
}
