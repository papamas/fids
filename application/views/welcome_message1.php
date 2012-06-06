<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		<table width="834" border="1">
		  <tr>
			<td width="134"><div align="center">Artis</div></td>
			<td width="402"><div align="center">Title</div></td>
			<td width="97"><div align="center">Year</div></td>
			<td width="173"><div align="center">Command</div></td>    
		  </tr>
		  <?php 
		  foreach ($list_cd as $value):
		  echo "
		  <tr>
			<td>$value->interpret</td>
			<td>$value->titel</td>
			<td>$value->jahr</td>
			<td><a href=$link=$value->id>$value->id</a></td>    
		  </tr>
		  ";
		  endforeach 
		  ?>
	  </table>
	  <br/>
	  
	  <table width="200" border="0">
	  <form action="<?=site_url()?>/welcome/update/" method="post">
	  <tr>
		<td>Artis</td>
		<td>:</td>
		<td><input type="text" name="artis" id="artis"  maxlength="100" size="100"  value="<?=@$cd->interpret?>" /></td>
	  </tr>
	  <tr>
		<td>Title</td>
		<td>:</td>
		<td><input type="text" name="title" id="title"  maxlength="100" size="100"  value="<?=@$cd->titel?>" /></td>
	  </tr>
	  <tr>
		<td>Year</td>
		<td>:</td>
		<td><input type="text" name="year" id="year" maxlength="100" size="100"  value="<?=@$cd->jahr?>"/></td>
		<td><input type="text" name="id" id="id" maxlength="100" size="100"  value="<?=@$cd->id?>"/></td>
	  </tr>
	  <tr>		
		<td><input name="update" type="submit" value="update"></td>
		<td><input name="reset" type="reset" value="reset"></td>
	  </tr>	  
	</table>
	</form>


		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>