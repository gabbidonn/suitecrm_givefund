<?php

global $sugar_version;

$admin_option_defs=array();

if(preg_match( "/^6.*/", $sugar_version) ) {
    $admin_option_defs['Administration']['suiteduplicatecheck_info']= array('helpInline','LBL_SUITEDUPLICATECHECK_TITLE','LBL_SUITEDUPLICATECHECK_DESCRIPTION','./index.php?module=SM_DuplicateCheck&action=settings');
} else {
    $admin_option_defs['Administration']['suiteduplicatecheck_info']= array('helpInline','LBL_SUITEDUPLICATECHECK_TITLE','LBL_SUITEDUPLICATECHECK_DESCRIPTION','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=SM_DuplicateCheck&action=settings", {trigger: true});');
}

$admin_group_header[]= array('LBL_SUITEDUPLICATECHECK','',false,$admin_option_defs, '');
