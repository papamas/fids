<html lang="en">
  <head>
    <meta name="Author" content="Chris Leonello">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="chart, plot, graph, javascript, jquery, jqplot, charting, plotting, graphing">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="verify-v1" content="d+yghLcOkdO6pP3P3jp+Fcz5f8OcRlRMRCiwD2MCYUg=" >
    
    <link rel="stylesheet" type="text/css" href="../style.css" />
  
  <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../src/excanvas.min.js"></script><![endif]-->

    <!--Jquery JS-->
    <script src="<?=base_url()?>public/js/jquery-1.6.2.min.js"></script>
	<script src="<?=base_url()?>public/js/jquery-ui-1.8.16.custom.min.js"></script>

  <!--------JQPLOT-->
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.pieRenderer.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.barRenderer.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/jqplot/plugins/jqplot.pointLabels.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/jqplot/jqplot.json2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/js/jqplot/jquery.jqplot.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/js/jqplot/examples.min.css" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>public/js/jqplot/syntaxhighlighter/styles/shCoreDefault.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>public/js/jqplot/syntaxhighlighter/styles/shThemejqPlot.min.css" />

  

  
<script class="code" type="text/javascript">
$(document).ready(function(){
  // Our ajax data renderer which here retrieves a text file.
  // it could contact any source and pull data, however.
  // The options argument isn't used in this renderer.
  var ajaxDataRenderer = function(url, plot, options) {
    var ret = null;
    $.ajax({
      // have to use synchronous here, else the function 
      // will return before the data is fetched
      async: false,
      url: url,
      dataType:"json",
      success: function(data) {
        ret = data;
      }
    });
    return ret;
  };

  // The url for our json data
  var jsonurl = "./jsondata.txt";

  // passing in the url string as the jqPlot data argument is a handy
  // shortcut for our renderer.  You could also have used the
  // "dataRendererOptions" option to pass in the url.
  var plot2 = $.jqplot('chart2', jsonurl,{
    title: "AJAX JSON Data Renderer",
    dataRenderer: ajaxDataRenderer,
    dataRendererOptions: {
      unusedOptionalUrl: jsonurl
    }
  });
});
</script>

</head>

<body>
<script language="javascript">   
$(document).ready(function(){
  // Our ajax data renderer which here retrieves a text file.
  // it could contact any source and pull data, however.
  // The options argument isn't used in this renderer.
  var ajaxDataRenderer = function(url, plot, options) {
    var ret = null;
    $.ajax({
      // have to use synchronous here, else the function
      // will return before the data is fetched
      async: false,
      url: url,
      dataType:"json",
      success: function(data) {
        ret = data;
      }
    });
    return ret;
  };
 
  // The url for our json data
  var jsonurl = "<?=base_url()?>public/file/jsondata.txt";
 
  // passing in the url string as the jqPlot data argument is a handy
  // shortcut for our renderer.  You could also have used the
  // "dataRendererOptions" option to pass in the url.
  var plot2 = $.jqplot('chart2', jsonurl,{
    title: "AJAX JSON Data Renderer",
    dataRenderer: ajaxDataRenderer,
    dataRendererOptions: {
      unusedOptionalUrl: jsonurl
    }
  });
});
</script>
<div id="chart2" style="margin-top:20px; margin-left:20px; width:800px; height:300px;"></div>
</body>
</html>
			
		   
			
	
	
	  
	 
	