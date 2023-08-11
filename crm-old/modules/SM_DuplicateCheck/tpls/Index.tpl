{literal}
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
/*.tab{
    padding-left:5em;
}*/
.checked{
    color: blue;
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
</style>
<script type="text/javascript">

function getModuleID(){
 var moduleName = $("#layoutEditorModules").val();
  location.href="index.php?module=SM_DuplicateCheck&action=settings&sourceModule="+moduleName;

}



$(document).ready(function() {
	     var warnMessage = null;
	           $("input[type='checkbox']").change(function() {            
                	   warnMessage = "You have unsaved changes on this page!";
                	  $("#vtduplicateform").addClass("formChanged");
                      $(".btn-success").addClass("formChanges");
});
//	$(".formChanges").live('click', function(){        
        $(document).on('click', ".formChanges", function(){        
		warnMessage = null;
		$("#vtduplicateform").removeClass("formChanged");
        $(".btn-success").removeClass("formChanges");
        $("#vtduplicateform").submit();
});
        window.onbeforeunload = function () {
            if (warnMessage != "null") return warnMessage;
        }	
	if(($('#layoutEditorModules').val() == 'Leads')|| ($('#layoutEditorModules').val() == 'Contacts') || ($('#layoutEditorModules').val() == 'Accounts'))
		$('#crosscheck').show();
	else
		$('#crosscheck').hide();		


$('[rel="tooltip"]').tooltip();

});	
</script>
{/literal}
{strip}
    
<div class="container-fluid" id="layoutEditorContainer">
	<input id="selectedModuleName" type="hidden" value="{$SELECTED_MODULE_NAME}" />
	<div class="widget_header row-fluid">
		<div class="col-sm-12">
			<h3>Duplicate Check</h3>
		</div>
		<div>
			<div class='row'>
				<div class='col-sm-3'>
					<h4 style="float:left;">Duplicate Check Rule For</h4>
				</div>
				<div class='col-sm-2' style="top:10px">
					<select class="select2" id="layoutEditorModules" onchange="getModuleID()" name="layoutEditorModules">
                        		{foreach key=MODULE item=MODULE_NAME from=$SUPPORTED_MODULES}
						<option value="{$MODULE}" {if $MODULE eq $SELECTED_MODULE_NAME} selected {/if}>{$MODULE_NAME}</option>
                        		{/foreach}
					</select>
				</div>
			</div>
			<form method="POST" action="index.php?module=SM_DuplicateCheck&action=UpdateFields" id="vtduplicateform">
				<div class="pull-right col-sm-5" style='top:-30px;'>
					<label class="fancy-checkbox" >
						<h4 style="float: left;">Enable / Disable</h4>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="checkbox"  name="isenabled" id="isenabled" {if $MODULE_ENABLED_VALUE eq 1}checked="yes"{/if} style="float: left;" value="1" />
						<i style="margin-top: -4px;" class="fa fa-toggle-on fa-2x fa-rotate-180 inactive unchecked" aria-hidden="true"></i>
						<span class="tab"></span>
						<i class="fa fa-toggle-on active fa-2x checked" style="position:relative;top:9px;" aria-hidden="true"></i>
						<span class="tab"></span>
					</label>
				</div>
			</div>
		</div>
		<div class="contents tabbable">
			<br>
				<hr class='hr-dotted' style='width:100%;'>
					<div class="tab-content layoutContent padding20 themeTableColor overflowVisible">
						<div class="tab-pane active" id="detailViewLayout">
							<h4 style="position: relative; top: 25px;">Configure Field Rule</h4>
							<div class="col-sm-7 marginLeftZero" style="float:right !important;">
								<input type="hidden" name="modulename" id="modulename" value="{$SELECTED_MODULE_NAME}" />
								<div>
									<button class="btn btn-default" onclick="window.location.reload();" style="float:right" value="Save">Cancel</button>
								</div>
								<div>
									<button class="btn btn-success" name="savebutton" style="float:right" type="submit" value="Save">Save</button>
									<span id="crosscheck"style="float: right; margin-top:-37px"> For CrossCheck &nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="ischecked" style="top:5px" id="ischecked" {if $CROSSCHECKVALUE eq 1} checked="yes"{/if}>&nbsp;&nbsp;
											<i id="crosscheckhelp" data-original-title = "Content" rel = "tooltip" title="Check Duplicates across Contacts , Leads and Organization for Email and Phone Field" class="fa fa-question-circle" aria-hidden="true"></i>
										</span>
										<span style="float:left; margin-top:-30px"> Click 
											<i class="fa fa-exchange" rel="tooltip1" data-original-title = "Content" title="To choose what to check in this module" aria-hidden="true" ></i> to choose what to check in this module 
										</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</div>
								</div>
								<br/>
							</div>
						</div>
						<div id='moduleBlocks' style='display:block;'>
                                    {foreach key=FIELD_NAME item=FIELD_VALUE from=$SELECTED_MODULE_FIELDS_LIST}
                                                            
							<div class="col-sm-6 marginLeftZero" style="padding:10px;word-wrap: break-word;border:1px solid #DDDDDD">
								<span class="fieldLabel">{$FIELD_VALUE}
                                                                {if $IS_MANDATORY}
									<span class="redColor">*</span>{/if}
								</span>
								<span class="btn-group pull-right">
									<label class="fancy-checkbox">
										<input type="checkbox" name ="fieldID[]" id="match{$FIELD_NAME}" class="data-id" {if $FIELD_NAME|in_array:$FIELDSTOMATCH}checked="yes"{/if} value ="{$FIELD_NAME}" />
										<i class="fa fa-exchange unchecked circle" aria-hidden="true"></i>
										<span class="tab"></span>
										<i class="fa fa-exchange checked circle" aria-hidden="true"></i>
										<span class="tab"></span>
									</label>
								</span>
							</div>
                                    {/foreach}
                                    
						</div>
						<input type="hidden" class="inActiveFieldsArray" value='{$IN_ACTIVE_FIELDS}' />
					</div>
					<div>
						<button class="btn btn-default" onclick="window.location.reload();" style="float:right" value="Save">Cancel</button>
					</div>
					<div>
						<button class="btn btn-success" name="savebutton" style="float:right" type="submit" value="Save">Save</button>
					</div>
				</div>
			</div>
		</div>
	</form>
{/strip}

