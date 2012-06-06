<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
	<!--Jquery UI CSS-->
   	<link rel="stylesheet" href="<?=base_url()?>public/css/start/jquery-ui-1.8.16.custom.css" type="text/css" media="all" />
	<!--Jquery TreeView CSS-->
	<!--<link rel="stylesheet" href="<?=base_url()?>public/css/start/jquery.treeview.css" type="text/css" media="all" />-->
    <!--Jquery Grid CSS-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>public/css/ui.jqgrid.css" />	
	<!--Jquery fancy CSS-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>public/css/fancybox/jquery.fancybox-1.3.4.css" />	
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>public/css/ui.multiselect.css" />
	
    <style>
		body { font-size: 62.5%; }
		
		/* remove padding and scrolling from elements that contain an Accordion OR a content-div */
		.ui-layout-center ,	/* has content-div */
		.ui-layout-west ,	/* has Accordion */
		.ui-layout-east ,	/* has content-div ... */
		.ui-layout-south { /* content-div has Accordion */
			padding: 0;
			overflow: hidden;
		}
		
		h3, h4 { /* Headers & Footer in Center & East panes */
			font-size:		1.1em;
			background:		#8ad0d8;
			border:			1px solid #BBB;
			border-width:	0 0 1px;
			padding:		7px 10px;
			margin:			0;
			font-family:Tahoma, Geneva, sans-serif;
			font-size:12px;
		}
		.ui-layout-east h4 { /* Footer in East-pane */
			font-size:		0.9em;
			font-weight:	normal;
			border-width:	1px 0 0;
		}
		.nama { /* Footer in East-pane */
			font-size: 18px;
			font-weight: bolder;
			font-family:Tahoma, Geneva, sans-serif;
			text-transform:uppercase;
			
		}
		.dasboard { /* Footer in East-pane */
			font-size: 12px;
			font-weight: bolder;
			font-family:Tahoma, Geneva, sans-serif;
			
		}
		
		.footer { /* Footer in East-pane */
			font-size: 10px;
			font-family: Arial, Helvetica, sans-serif;
			font-weight:500;	
			
		}
		/* multiselect styles */
		.multiselect {
			width: 460px;
			height: 100px;
		}

		
	</style>
	<!--Jquery JS-->
    <script src="<?=base_url()?>public/js/jquery-1.7.2.min.js"></script>
	<script src="<?=base_url()?>public/js/jquery-ui-1.8.20.custom.min.js"></script>
	<!--Jquery Layout-->
    <script src="<?=base_url()?>public/js/jquery.layout-latest.js"></script> 
	<!--Jquery JSON-->  
    <script src="<?=base_url()?>public/js/jquery.json-2.3.js"></script> 
	<!--Jquery Treeview-->   
	<script src="<?=base_url()?>public/js/jquery.treeview.js"></script>    
	<!--Jquery Jqgrid--> 
	<script src="<?=base_url()?>public/js/jqgrid/i18n/grid.locale-en.js" type="text/javascript"></script>
    <script src="<?=base_url()?>public/js/jqgrid/jquery.jqGrid.min.js" type="text/javascript"></script>
	<!--Jquery fancy box--> 
	<script src="<?=base_url()?>public/js/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
	
	<script src="<?=base_url()?>public/js/ui.multiselect.js" type="text/javascript"></script>
    <!--<script type="text/javascript" src="<?=base_url()?>public/js/tiny/tiny_mce/tiny_mce.js"></script>-->
	<script src="<?=base_url()?>public/js/jquery.json-2.3.js"></script>
	<script src="<?=base_url()?>public/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/themeswitchertool.js"></script>
	<!--------JQPLOT-->
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/jquery.jqplot.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/jquery.jqplot.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.barRenderer.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.pieRenderer.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.pointLabels.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/js/jqplot/jquery.jqplot.min.css" />
	
	
	<script>
    $(document).ready(function () {
      $('body').layout({ applyDefaultStyles: true,
	  					    west__size    :            '250'						
						,	west__resizable:			false
						,   north__minSize:				20
						,	north__spacing_open:		1
						,	north__togglerLength_open:	0
						,	north__togglerLength_close:	-1
						,	north__resizable:			false
						,	north__slidable:			false
						,	north__fxName:		        'none'
						,   south__minSize:				20
						,	south__spacing_open:		1
						,	south__togglerLength_open:	0
						,	south__togglerLength_close:	-1
						,	south__resizable:			false
						,	south__slidable:			false
						,	south__fxName:		        'none'
						
						
						
						 
	   });
      $( "#accordion1" ).accordion({
			fillSpace: true,
			icons: { 'header': 'ui-icon-circle-plus', 'headerSelected': 'ui-icon-circle-minus' },
			//active:		1
		});  
		
		$( "#logout" ).button(
		     { icons: {primary:'ui-icon-power'},
			   text: false
			 
			 }
				
		);	
		
		$( "#change_password" ).button(
		   { icons: {primary:'ui-icon-person'},
			   text: false			 
		   }
		
		);
		
		$( "#home" ).button(
		   { icons: {primary:'ui-icon-home'},
			   text: false			 
		   }
		
		);
		
	
		
		
	});
	
</script>
<script language="javascript">
$(document).ready(function(){
	    $("#change_password").click(function () {
		   $( '#change-password' ).dialog( "open" );	
		
		});
		
		function clearForm (){	                	
					$( "#password_lama" ).val('');
					$( "#password_baru" ).val('');	
					$( "#confirmasi_password_baru" ).val('');						
					
		     }		
	
	// form user
			$( "#change-password" ).dialog({
			autoOpen: false,
			height: 175,
			width: 350,
			modal: 'true',
			hide : 'Slide',
			buttons: {
				"Simpan": function() {	
				     var data = {old_password : $("#password_lama").val(),new_password : $("#password_baru").val(),confirm_new_password : $("#confirmasi_password_baru").val()
								}; 	
					   $.ajax({
								type: "POST",
								url : "<?=base_url()?>index.php/auth/change_password",
								data: data,
								success: function(data){ 	
								var obj = $.evalJSON(data);	
								  if(obj.respone == true){									    				     
									 $( '#change-password' ).dialog( "close" );
									 alert(obj.auth_message);	
								  }else {
								     alert(obj.auth_message);
								  }	 
																				
							   }, // akhir fungsi sukses																
						    }); // akhir ajax request 						 
				},			
				Cancel: function() {
					$( this ).dialog( "close" );
					clearForm();
				}
			},
			
			open: function() {
				$('.ui-dialog-buttonpane').find('button:contains("Cancel")').button(
				{icons: {primary: "ui-icon-circle-close"}
				
				});
				$('.ui-dialog-buttonpane').find('button:contains("Simpan")').button(
				{icons: {primary: "ui-icon-disk"}
				
				});
				
			},// open function
			
			close: function() {
				clearForm();
						
			},// close function
			
			
		});
		
		$('#switcher').themeswitcher({
              initialText: 'Change Theme',
			   height :'350',
              
				  
         });

});
	
</script>

</head>
<body>

<div class="ui-layout-north ui-widget-content ui-state-error" style="display: none;">

<table class="ui-widget-header ui-layout-content ui-widget-content" width="100%">
<tr>
<!--<td><img src="<?=base_url()?>public/file/gambar/asuransi.jpg" width="150" height="100"></td>-->
<td  class="nama">PT. ADI PRATAMA ASIA - Reinsurance Brokers & Consultant</td>
<td  class="dasboard" align="right">Salam,&nbsp;<img src="<?=base_url()?>public/file/photo/Photo1.jpg" width="30" height="30"> &nbsp;<?=$profile->nama?> &nbsp;| <a href="#"id="change_password" name="change_password">CHANGE PASSWORD </a>&nbsp;| <a href="<?=base_url()?>index.php/auth/logout" id="logout">LOGOUT</a>&nbsp;| <a href="<?=base_url()?>index.php/welcome" id="home">HOME</a></td>
</tr>

</table>



</div>	  

    


