<?php
   if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class SM_DuplicateCheck {
        function sm_duplicate_check($event, $arguments)
        {
		$module = $_REQUEST['module'];
            	$view = $_REQUEST['action'];
		$recordId = $_REQUEST['record'];
		if($module == 'Contacts' || $module == 'Leads' || $module == 'Accounts'|| $module == 'Prospects' || $module == 'Cases')
		{
		?>
		     <link rel="stylesheet" type="text/css" href="modules/SM_DuplicateCheck/tpls/validationEngine.jquery.css">
		     <script src='modules/SM_DuplicateCheck/tpls/jquery.validationEngine-en.js'></script>
		     <script src='modules/SM_DuplicateCheck/tpls/jquery.validationEngine.js'></script>
			<script>
			$(document).ready(function() {
			   	var url = document.location; 
				var module = "<?php Print($module);?>";
    			var record_view = "<?php Print($view);?>";
				var currentId = "<?php Print($recordId);?>";

				if(window.location.href.indexOf("isDuplicate") > -1)	{
			      	var dupPage = /isDuplicate=([^&]+)/.exec(url)[1];
			      	dupPage = dupPage ? dupPage : 'myDefaultValue';
			    }

			    if(dupPage == "true")	{
			        setTimeout(function()	{
			            if($('button[type="submit"]'))	{
			          		$(".btn-success").addClass("vtSmackCustomClass");
			           		$('button[type="submit"]').prop("type", "button");
			            } 
			        },200);
			    }
			    	makeDiv ="";
			    	var fieldName = "";
			     	fieldNameArray = new Array();

			        $.ajax({
			            url: 'index.php?module=SM_DuplicateCheck&action=GetFieldsName&moduleName='+module+'&fieldName='+fieldName,
			            success: function(response) {
			                var data = JSON.parse(response); 
					        var isenable=data.result[0];
			              	var count = data.result[1][0];
			              	var i = 0;
				            for( i=1;i<=count;i++ ){
						        if(isenable>0){
					                var fieldName = data.result[1][i];
							        if(fieldName == 'email'){
							            $('[type="'+fieldName+'"]').addClass("vtsmack");
	      							}else
							    	    $('[name="'+fieldName+'"]').addClass("vtsmack");

					                	fieldNameArray.push(data.result[1][i]);
						    	    }
				       	        }
      				        } 
				    });

				$(document.body).on('focusin', '.vtsmack' ,function(){
			             $(".vtSmackClass").remove();
			        })

				$(document.body).on('focusout', '.vtsmack' ,function(){
			            var fieldName = $(this).attr("name");
			            var fieldType = $(this).attr("type");
			            var fieldValues = $(this).val();
			            var fieldId = $(this).attr("id");
			            if(fieldValues!=""){
				            var addCustomClass = $('[name="'+fieldName+'"]').addClass("vtSmackCustomError");

				       $.ajax({
				            url: 'index.php?module=SM_DuplicateCheck&action=ValidateDuplicate&record_id='+currentId+'&record_view='+record_view+'&moduleName='+module+"&fieldName="+fieldName+"&fieldValues="+fieldValues+"&fieldtype="+fieldType,
				            success: function(response) {
				                    var result = JSON.parse(response); 
                				    var resultantCount = result.result[0][0];

						    if(fieldType == 'email'){
							if(module == 'Contacts' || module == 'Prospects')
							 var count = resultantCount;
							else if(module == 'Accounts' || module == 'Leads')
							 var count = resultantCount + 2;
							else 
							 var count = resultantCount + 1;
						    }else
							 var count = resultantCount + 2;

		  				    var count_of_fields=result.result[0][2][0];
				                    makeDiv = "";
						    var crosscount=result.result[1][2];
				            if((crosscount > 0) || (resultantCount > 0))   {
							if(fieldType == 'email')
								var fieldlabel = 'Email';
							else
				    	        var fieldlabel = result.result[0][1]['fieldlabel'];

				             	    makeDiv += "";
				                	makeDiv += fieldlabel+" already exists with : "+"<br/>";
             	    	    }

					     	if(crosscount == undefined)
					            	crosscount = 0;
						    if(resultantCount < 1 && crosscount < 1){
                					   $("#SAVE").removeClass("vtSmackCustomClass");
					                   $('button[type="button"]').prop("type", "submit");
				       	            }else if(result.result[0][3] != undefined) {
				                       	   $("#SAVE").addClass("vtSmackCustomClass");
        	               				   $('button[type="submit"]').prop("type", "button");
			                	       	   makeDiv += "";
				                       	    for(i=3;i<=count;i++){
        	          				           if(dupPage != "true"){
				                	                if(result.result[0][i]['recordid']==currentId){
                        					           continue;
                                					}
	                            				}

				        	                if(result.result[0][i]['first_name']){
												var recordname = result.result[0][i]['first_name'] + ' '+result.result[0][i]['last_name'];
												var recordid = result.result[0][i]['recordid'];
											}else if(result.result[0][i]['last_name']){
											
												var recordname = result.result[0][i]['last_name'];
												var recordid = result.result[0][i]['recordid'];

											}
                        					else{
												var recordname = result.result[0][i]['name'];//custom field added by afreeth
												var recordid = result.result[0][i]['recordid'];
											}											  
				         	                  var urlpath = "index.php?module="+module+"&action=DetailView&record="+recordid;
												  makeDiv +="<u><a href="+urlpath+" style='color:white' target=_blank>"+recordname+' '+"</a></u>";
                	            				  makeDiv +="<u><a href="+urlpath+" style='color:white' target=_blank>"+recordname+' '+"</a></u>";
                        	    		 		  makeDiv +="<br/>";
                        				    }
			                        	  $('#'+fieldId).validationEngine('showPrompt', makeDiv, 'anything else');
						    }

						    if(makeDiv == "")
							$("#"+fieldId).validationEngine('hide');

						    for(i=0;i<crosscount;i++){	
							var crossmodulename=result.result[1][3][i]['modulename'];
							var crossrecordid=result.result[1][3][i]['recordid'];
							if(crossmodulename == 'Accounts')
								var crossrecordname=result.result[1][3][i]['name'];
							else
								var crossrecordname=result.result[1][3][i]['first_name'] +' '+result.result[1][3][i]['last_name'];

						 	var modulepath = "index.php?module="+crossmodulename+"&action=DetailView&record="+crossrecordid;
							makeDiv +=" <u><a href="+modulepath+" style='color:white' target=_blank>"+crossrecordname+' '+' ( '+ crossmodulename +")<a></u><br/>";
						   }

				               	   $('#'+fieldId).validationEngine('showPrompt', makeDiv, 'anything else');
                			    }
		                       })
		                    }
			        });  

				    $(document.body).on('click', '.vtSmackCustomClass' ,function(){
				        var message = "Duplicate found. Do you still want to save this record ?";
			            if(confirm(message)==true){
        					$(".btn-success").removeClass("vtSmackCustomClass");
				            location.href="index.php?module="+module+"&action=DetailView&return_module="+module+"&return_action=index";
				        }else{
					        location.href="index.php?module="+module+"&action=EditView&return_module="+module+"&return_action=index";
		        			alert('Cancelled');
			            }

			       })
			   });
		    </script>
		<?php
		}
	}
}
