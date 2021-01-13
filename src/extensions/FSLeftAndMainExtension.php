<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FSCMS;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\Admin\CMSMenu;
use SilverStripe\Admin\SecurityAdmin;
use SilverStripe\Security\Member;
use SilverStripe\Security\Security;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\Reports\ReportAdmin;
use SilverStripe\CampaignAdmin\CampaignAdmin;

/**
 * Description of FS_CMSMain
 *
 * @author fang
 */
class FSLeftAndMainExtension extends Extension  {
    
    use Configurable;


    /**
     * OVERRIDE
     */
    public function init(){
        
        //To update Main CMS template
        $this->owner->template = "FSCMS\FSLeftAndMain";
        
        //To import CSS files
        Requirements::css("fscms/css/fs-cms.css");
        
        
        //To remove model admin based on config
        //setting
        if(!$this->isDefaultAdminLoggedIn()){
            
            if($this->config()->disable_security_admin){
                CMSMenu::remove_menu_class(SecurityAdmin::class);
            }
            
            if($this->config()->disable_report_admin){
                CMSMenu::remove_menu_class(ReportAdmin::class);
            }
            
            if($this->config()->disable_campaign_admin){
                CMSMenu::remove_menu_class(CampaignAdmin::class);
            }
            
        }
    }
    
    
    /**
     * Function is to get FS MENU template
     * @return string of HTML
     */
    public function FSCMSMenu(){
        return $this->owner->renderWith("FSCMS\Includes\FSLeftAndMain_Menu");
    }
    
    
    /**
     * Function is to get logo image path
     * @return string
     */
    public function logoImage(){
        return \FSCMSPage::config()->get("logo_image");
    }
    
    
    /**
     * Function is to check default admin logged in
     * @return type
     */
    public function isDefaultAdminLoggedIn(){
        return FSLeftAndMainExtension::is_default_admin_loggedin();
//        $member = Security::getCurrentUser();
//        return $member->isDefaultAdmin();
    }
    
    
    /**
     * STATIC
     * Function is to check default admin logged in
     * @return type
     */
    public static function is_default_admin_loggedin(){
        $member = Security::getCurrentUser();
        return $member->isDefaultAdmin();
    }
    
}
