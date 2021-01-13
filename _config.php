<?php

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\Security\Security;
use SilverStripe\Admin\CMSMenu;
//use SilverStripe\CMS\Controllers\CMSPagesController;
use FSCMS\FSLeftAndMainExtension;
use FSCMS\FSCMSPagesController;
use FSCMS\FSCMSPageEditController;

//TODO
//OVERRIDE Security
//update the new main page template
Security::config()->set("template_main", "FSCMS/Security_login");
//update the new main page template
Security::config()->set("page_class", "FSCMSPage");


//TODO
//OVERRIDE LeftAndMain
LeftAndMain::add_extension(FSLeftAndMainExtension::class);
LeftAndMain::config()->set("help_link", "//www.fstudio.co.nz");
LeftAndMain::config()->set("application_name", "FS CMS");


//To remove menu item
CMSMenu::remove_menu_class(FSCMSPagesController::class);
CMSMenu::remove_menu_class(FSCMSPageEditController::class);
