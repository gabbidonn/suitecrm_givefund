<?php /* Smarty version 2.6.31, created on 2021-11-22 13:19:02
         compiled from modules/SM_DuplicateCheck/tpls/Index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'in_array', 'modules/SM_DuplicateCheck/tpls/Index.tpl', 190, false),)), $this); ?>
<?php echo '
<link rel="stylesheet" type="text/css" href="modules/SM_DuplicateCheck/public/css/font-awesome.css" />
<style type="text/css">
.moveleft {
  float: left;
  width: 125px;
  text-align: right;
  margin: 2px 10px;
  display: inline
}
.moveright {
  float: left;
  text-align: left;
  margin: 2px 10px;
  display: inline
}
.row{
	margin: 5px 0px;
}	
/*.tab{
    padding-left:5em;
}*/
.checked{
    color: blue;
}
.alert{
	display: inline-block;
	width: 100%;
	font-size: 15px;
}
select{
	height: auto !important;
	line-height: 30px !important;
}
.map-row .checked{
	color: #fff;
	background: #444;
}

.fancy-checkbox input[type="checkbox"],
.fancy-checkbox .checked {
    display: none;
}
 
.fancy-checkbox input[type="checkbox"]:checked ~ .checked
{
    display: inline-block;
}
 
.fancy-checkbox input[type="checkbox"]:checked ~ .unchecked
{
    display: none;
}
.circle
{
    border: green;
    padding: 5px 10px;
    display: inline-block;
    -moz-border-radius: 100px;
    -webkit-border-radius: 100px;
    border-radius: 100px;
    -moz-box-shadow: 0px 0px 2px #888;
    -webkit-box-shadow: 0px 0px 2px #888;
    box-shadow: 0px 0px 2px #888;
}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success:active:focus{
	background: #f08377;
	border: none;
}
</style>
<script type="text/javascript">

function getModuleID(){
 var moduleName = $("#layoutEditorModules").val();
  location.href="index.php?module=SM_DuplicateCheck&action=settings&sourceModule="+moduleName;

}



$(document).ready(function() {
	     var warnMessage = null;
	           $("input[type=\'checkbox\']").change(function() {            
                	   warnMessage = "You have unsaved changes on this page!";
                	  $("#vtduplicateform").addClass("formChanged");
                      $(".btn-success").addClass("formChanges");
});

setTimeout(function(){$(\'.alert\').hide();},3000);

//	$(".formChanges").live(\'click\', function(){        
        $(document).on(\'click\', ".formChanges", function(){        
		warnMessage = null;
		$("#vtduplicateform").removeClass("formChanged");
        $(".btn-success").removeClass("formChanges");
        $("#vtduplicateform").submit();
});
        window.onbeforeunload = function () {
            if (warnMessage != "null") return warnMessage;
        }	
	if(($(\'#layoutEditorModules\').val() == \'Leads\')|| ($(\'#layoutEditorModules\').val() == \'Contacts\') || ($(\'#layoutEditorModules\').val() == \'Accounts\'))
		$(\'#crosscheck\').show();
	else
		$(\'#crosscheck\').hide();		


$(\'[rel="tooltip"]\').tooltip();

});	
</script>
'; ?>

<?php echo '<div class="container-fluid" id="layoutEditorContainer"><input id="selectedModuleName" type="hidden" value="'; ?><?php echo $this->_tpl_vars['SELECTED_MODULE_NAME']; ?><?php echo '" /><div class="widget_header row-fluid"><div class=""><h1>Duplicate Check</h1></div><form method="POST" action="index.php?module=SM_DuplicateCheck&action=UpdateFields" id="vtduplicateform"><div><div class=\'row\' style="display: flex; align-items: center;"><div class="col-md-6"><div class="row" style="display: flex; align-items: center;"><div class=\'col-md-5\'><h5 style="float:left;">Duplicate Check Rule For</h5></div><div class=\'col-md-7\'><select class="select2 form-control" id="layoutEditorModules" onchange="getModuleID()" name="layoutEditorModules">'; ?><?php $_from = $this->_tpl_vars['SUPPORTED_MODULES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MODULE'] => $this->_tpl_vars['MODULE_NAME']):
?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['MODULE']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['MODULE'] == $this->_tpl_vars['SELECTED_MODULE_NAME']): ?><?php echo ' selected '; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['MODULE_NAME']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select></div></div></div><div class="col-md-4 col-md-offset-2"><label class="fancy-checkbox" style="display: flex; align-items: center;"><label>Enable / Disable</label><input type="checkbox"  name="isenabled" id="isenabled" '; ?><?php if ($this->_tpl_vars['MODULE_ENABLED_VALUE'] == 1): ?><?php echo 'checked="yes"'; ?><?php endif; ?><?php echo ' style="float: left;" value="1" /><i style="margin-left: 5px;" class="fa fa-toggle-on fa-2x fa-rotate-180 inactive unchecked" aria-hidden="true"></i><i style="margin-left: 5px;" class="fa fa-toggle-on active fa-2x checked" aria-hidden="true"></i></label></div></div></div></div><div class="contents tabbable"><br><hr class=\'hr-dotted\' style=\'width:100%;\'><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><div class="tab-pane active" id="detailViewLayout" style="display: inline-block; width: 100%;"><h4 style="position: relative; top: 25px;">Configure Field Rule</h4><div class="col-sm-7 marginLeftZero" style="float:right !important;"><input type="hidden" name="modulename" id="modulename" value="'; ?><?php echo $this->_tpl_vars['SELECTED_MODULE_NAME']; ?><?php echo '" /><div><button class="btn btn-default" onclick="window.location.reload();" style="float:right" value="Save">Cancel</button></div><div><button class="btn btn-success" name="savebutton" style="float:right" type="submit" value="Save">Save</button></div><br/></div></div><div class="row" style="margin: 15px 0px;"><div class="col-md-4">Click <i class="fa fa-exchange"></i> to choose what to check in this module</div><div class="col-md-3"><span id="crosscheck"><label style="margin-right: 5px;">For CrossCheck</label><input type="checkbox" name="ischecked" style="top:5px" id="ischecked" '; ?><?php if ($this->_tpl_vars['CROSSCHECKVALUE'] == 1): ?><?php echo ' checked="yes"'; ?><?php endif; ?><?php echo '><i style="margin-left: 5px;" id="crosscheckhelp" data-original-title = "Content" rel = "tooltip" title="Check Duplicates across Contacts , Leads and Organization for Email and Phone Field" class="fa fa-question-circle" aria-hidden="true"></i></span></div></div><div id=\'moduleBlocks\' style=\'display:block;\'>'; ?><?php $_from = $this->_tpl_vars['SELECTED_MODULE_FIELDS_LIST']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FIELD_NAME'] => $this->_tpl_vars['FIELD_VALUE']):
?><?php echo '<div class="col-sm-6 marginLeftZero"><div class="map-row" style="border: 1px solid #e8e8e8; padding: 15px;"><span class="fieldLabel">'; ?><?php echo $this->_tpl_vars['FIELD_VALUE']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['IS_MANDATORY']): ?><?php echo '<span class="redColor">*</span>'; ?><?php endif; ?><?php echo '</span><span class="btn-group pull-right"><label class="fancy-checkbox"><input type="checkbox" name ="fieldID[]" id="match'; ?><?php echo $this->_tpl_vars['FIELD_NAME']; ?><?php echo '" class="data-id" '; ?><?php if (((is_array($_tmp=$this->_tpl_vars['FIELD_NAME'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['FIELDSTOMATCH']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['FIELDSTOMATCH']))): ?><?php echo 'checked="yes"'; ?><?php endif; ?><?php echo ' value ="'; ?><?php echo $this->_tpl_vars['FIELD_NAME']; ?><?php echo '" /><i class="fa fa-exchange unchecked circle" aria-hidden="true"></i><span class="tab"></span><i class="fa fa-exchange checked circle" aria-hidden="true"></i><span class="tab"></span></label></span></div></div>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</div><input type="hidden" class="inActiveFieldsArray" value=\''; ?><?php echo $this->_tpl_vars['IN_ACTIVE_FIELDS']; ?><?php echo '\' /></div><div class="row" style="margin-top: 10px; display: inline-block; width: 100%;"><button class="btn btn-default" onclick="window.location.reload();" style="float:right" value="Save">Cancel</button><button class="btn btn-success" name="savebutton" style="float:right" type="submit" value="Save">Save</button></div></div></div></div></form>'; ?>

