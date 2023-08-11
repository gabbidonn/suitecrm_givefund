<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/SugarView.php');

class ViewSettings extends SugarView
{

    public function __construct()   {
    	parent::__construct();
        $this->typeList = array('assigned_user_name', 'relate', 'link', 'id', 'currency', 'photo', 'image', 'checkbox');
        $this->nameList = array('deleted', 'id', 'date_entered', 'date_modified', 'modified_user_id', 'created_by', 'joomla_account_id', 'portal_account_disabled', 'lawful_basis_source', 'lawful_basis', 'date_reviewed');
	}

    protected function _getModuleTitleParams($browserTitle = false)
    {
        global $mod_strings;

        return array(
           "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
           translate('LBL_SUITEDUPLICATECHECK','Administration'),
           );
    }


    public function preDisplay()
    {
        global $current_user;

        if(!is_admin($current_user)) {
            sugar_die("Unauthorized access to administration.");
        }
    }

    public function display()
    {
	global $db, $app_list_strings;
        if(!$this->checkIonCubeLoaded())
        {
	        $this->ss->display('modules/SM_DuplicateCheck/tpls/IoncubeNotAvailable.tpl','SM_DuplicateCheck');
        }else{
            if(!isset($_GET['sourceModule']))
                header('location:index.php?module=SM_DuplicateCheck&action=settings&sourceModule=Contacts');

            if($_GET['notify']){
            	echo "<div class='fa fa-times-circle fa-2x alert alert-success notificationArea' id='notificationArea' onclick='clearNotificationArea();'> <span> Settings Saved Successfully </span><script>function clearNotificationArea(){ $('#notificationArea').hide(); }</script> </div>";
            }
            if($_GET['error']){
            	echo "<div class='fa fa-times-circle fa-2x alert alert-danger notificationArea' id='notificationArea' onclick='clearNotificationArea();'> <span> Please Enable the Module </span><script>function clearNotificationArea(){ $('#notificationArea').hide(); }</script> </div>";
            }

            //by default show field layout
            $this->showFieldLayout($request);
        }
    }

    public function showFieldLayout($request) 
    {
            global $db, $app_list_strings;
            $selmodule = $_GET['sourceModule'];

            $moduleName = $selmodule;
            $moduleFieldsList = $this->getModuleFieldList($moduleName);
         
            $sourceModule = $selmodule;
            $supportedModulesList = array('Contacts' => 'Contacts', 'Leads' => 'Leads', 'Accounts' => 'Accounts', 'Cases' => 'Cases', 'Prospects' => 'Targets');

            if(empty($sourceModule)) {
                //To get the first element
                $sourceModule = reset($supportedModulesList);
            }
            $queryVTDup = $db->pquery("SELECT isenabled,crosscheck FROM sm_duplicatechecksettings WHERE modulename='$sourceModule'");
            $valuesVTDup = $db->fetchByAssoc($queryVTDup);
            $isenabledValue = $valuesVTDup['isenabled'];
            $crosscheckValue = $valuesVTDup['crosscheck'];

            $fieldsToMatch = $this->getInstanceByFieldToMatch($sourceModule);

            $blockIdFieldMap = array();
            $inactiveFields = array();
            foreach($fieldModels as $fieldModel) {
                $blockIdFieldMap[$fieldModel->getBlockId()][$fieldModel->getName()] = $fieldModel;
                if(!$fieldModel->isActiveField()) {
                    $inactiveFields[$fieldModel->getBlockId()][$fieldModel->getId()] = vtranslate($fieldModel->get('label'), $sourceModule);
                }
            }

            foreach($blockModels as $blockLabel => $blockModel) {
                $fieldModelList = $blockIdFieldMap[$blockModel->get('id')];
                $blockModel->setFields($fieldModelList);
            }
            $this->ss->assign('SELECTED_MODULE_NAME', $sourceModule);
            $this->ss->assign('MODULE_ENABLED_VALUE', $isenabledValue);

            $this->ss->assign('FIELDSTOMATCH',$fieldsToMatch);
            $this->ss->assign('CROSSCHECKVALUE',$crosscheckValue);
            $this->ss->assign('SUPPORTED_MODULES',$supportedModulesList);
            $this->ss->assign('SELECTED_MODULE_FIELDS_LIST',$moduleFieldsList);
            $this->ss->assign('SELECTED_MODULE_MODEL', $moduleModel);
            $this->ss->assign('moduleFields', $moduleFields);
            $this->ss->assign('BLOCKS',$blockModels);
            $this->ss->assign('QUALIFIED_MODULE', $qualifiedModule);
            $this->ss->assign('IN_ACTIVE_FIELDS', $inactiveFields);
            $this->ss->display('modules/SM_DuplicateCheck/tpls/Index.tpl');
    }

    public function checkIonCubeLoaded(){
       //         return true;
       return extension_loaded('ionCube Loader');
    }
	
    public function getInstanceByFieldToMatch($sourceModule)
    {
	global $db;
        $query = "SELECT fieldstomatch FROM sm_duplicatechecksettings WHERE modulename='?'";
        $result = $db->pquery($query, array($sourceModule));
        $fetchResult = $db->fetchByAssoc($result);
        $explodeFieldsToMatch = explode(",", $fetchResult['fieldstomatch']);
        return $explodeFieldsToMatch;

    }

    public function getModuleFieldList($moduleName)
    {
	    $selmodule = $moduleName;
        $modules = array('Contacts' => 'Contact', 'Leads' => 'Lead', 'Accounts' => 'Account', 'Cases' => 'Case', 'Prospects' => 'Prospect');

        // module translation starts here
        if(empty($_SESSION['authenticated_user_language']))
            $current_language = $sugar_config['default_language'];
        else
            $current_language = $_SESSION['authenticated_user_language'];

        $languageFileLocation = "modules/{$moduleName}/language/{$current_language}.lang.php";
        if(file_exists($languageFileLocation))  {
            require_once("modules/{$moduleName}/language/{$current_language}.lang.php");
        }

        // module translation ends here

        // requiring module class file to get field names
        require_once("modules/{$moduleName}/{$modules[$selmodule]}.php");
        if($moduleName == 'Cases')
            $modules[$selmodule] = 'aCase';
        $focus = new $modules[$selmodule]();

        // getting selected module fields
        $moduleFields  = $focus->field_name_map;

        foreach($moduleFields as $key => $value) { 
            $selected = '';
    		if($value['name'] == 'email')
    		{
    		}
            elseif($value['source'] == 'non-db' || in_array($value['type'], $this->typeList) || in_array($value['name'], $this->nameList))
                continue;

            if($unserializedMappingInfo[$select_name] == $key) {
                $selected = "selected";
            }
            $fieldLabel = $value['vname'];
            # Custom field - Display label
            if($value['source']=='custom_fields' && $value['labelValue'] !=''){
                $fieldLabel = $value['labelValue'];
            }
            if(isset($mod_strings[$value['vname']]) || !empty($mod_strings[$value['vname']]))
                $fieldLabel = $mod_strings[$value['vname']];

            $moduleFieldsList[$key] = translate($fieldLabel);
        }
		return $moduleFieldsList;
    }
}
