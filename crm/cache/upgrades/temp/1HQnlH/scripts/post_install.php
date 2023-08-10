<?php
if (! defined('sugarEntry') || ! sugarEntry) die('Not A Valid Entry Point');

function post_install() {

    global $sugar_version, $db, $dictionary, $current_user;

    require_once('include/utils.php');
    require_once('include/utils/file_utils.php');
    require_once('config.php');
    require_once('include/MVC/Controller/SugarController.php');
    require_once('modules/ModuleBuilder/controller.php');
    require_once('modules/ModuleBuilder/parsers/ParserFactory.php');

		$db->query("CREATE TABLE `sm_duplicatechecksettings` (
		 `id` int(3) NOT NULL AUTO_INCREMENT,
		 `modulename` varchar(50) NOT NULL,
		 `fieldstomatch` blob,
		 `isenabled` int(1) DEFAULT '1',
		 `crosscheck` int(1) DEFAULT '0',
		  PRIMARY KEY (`id`))");
			$modules = array('Contacts', 'Leads', 'Accounts', 'Cases', 'Prospects');
            foreach($modules as $module)
                $db->pquery("insert into sm_duplicatechecksettings (modulename, isenabled, crosscheck) values ('?', '?', '?')", array($module, 1, 0));

    global $sugar_version;
    if(preg_match( "/^6.*/", $sugar_version)) {
        echo "
            <script>
            document.location = 'index.php?module=SM_DuplicateCheck&action=settings';
            </script>"
        ;
    } else {
        echo "
            <script>
            var app = window.parent.SUGAR.App;
            window.parent.SUGAR.App.sync({callback: function(){
                app.router.navigate('#bwc/index.php?module=SM_DuplicateCheck&action=settings', {trigger:true});
            }});
            </script>"
        ;
    }
}

