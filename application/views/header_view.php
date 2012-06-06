<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
   	<link rel="stylesheet" href="<?=base_url()?>public/css/start/jquery-ui-1.8.16.custom.css" type="text/css" media="all" />
	<style>
		body { font-size: 62.5%; }
		label, input { display:block; }
		input.text { margin-bottom:14px; width:95%; padding: .4em; }
		.ui-dialog-titlebar-close{display: none;}
       
				
	</style>
	<script src="<?=base_url()?>public/js/jquery-1.7.2.min.js"></script>
	<script src="<?=base_url()?>public/js/jquery-ui-1.8.20.custom.min.js"></script>
    <script src="<?=base_url()?>public/js/jquery.json-2.3.js"></script>  
	 
	<script language="javascript">
	$(document).ready(function() {
		function updateTips(tips,t ) {
			tips
				.text( t )
				.addClass( "ui-state-error" );
			
		}
		
    $( "#dialog" ).dialog({
			//autoOpen: false,
			height: 250,
			width: 300,
			modal: true,
			show: 'bounce',
			buttons: {
				"LOGIN": function() {							
				      var data = { username : $("#username").val(), password : $("#password").val()}; 						
							$.ajax({
								type: "POST",
								url : "<?=base_url()?>index.php/auth/login",
								data: data,
								success: function(data){
								var obj = $.evalJSON(data);
								if(obj.respone == true){
									window.location.replace("<?=base_url()?>index.php/welcome");
								}
								
								  if (obj.error_username) {
									  alert(obj.error_username);	
								  }
								  if (obj.error_password) {
									  alert(obj.error_password);	
								  }
								  if (obj.error_auth) {
									  alert(obj.error_auth);
								  }																	
														
							   }, // akhir ajax sukses
							  																
						    }); // akhir ajax request
						 
				},//akhir function button
			},// akhir buttons
			
			open: function() {
				$('.ui-dialog-buttonpane').find('button:contains("LOGIN")').button(
				{icons: {primary: "ui-icon-locked"}
				});
			},// open function
			
			close: function() {
				//clearForm();
						
			},// close function
			
			
		})
		.keyup(function(e){
		  if( e.keyCode == 13 ){
		   $(this).parent().find('button:nth-child(1)').trigger("click");
		  }
		});

				
		
							
	});
</script>
</head>
<body>
