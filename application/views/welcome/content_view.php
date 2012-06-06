<script language="javascript">   	
$(document).ready(function(){

   $( "#tabs" ).tabs();	
	
		
	$('#tabs').bind('tabsshow', function(event, ui) {
	  
      if (ui.index == 0 && plot1._drawCount == 0) {
        plot1.replot();
      }
     
	 if (ui.index == 1 && plot2._drawCount == 0) {
        plot2.replot();
      }
	  
	  if (ui.index == 2 && plot3._drawCount == 0) {
        plot3.replot();
      }
    });
	
	
	
		
	

			$.jqplot.config.enablePlugins = true;
				var s2 = [14000, 16000, 17000, 18000,14000, 16000, 17000, 18000,14000, 16000, 17000, 18000,20000];
				var ticks2 = ['Harta<br/>Benda', 'Kendaraan<br/>Bermotor', 'Pengangkutan', 'Rangka<br/>Kapal','Rangka<br/>Pesawat', 'Satelit', 'Energi', 'Rekayasa','Tanggung<br/>Gugat', 'Kecelakaan', 'Kredit', 'Suretyship','Aneka'];
				 
			   plot2 = $.jqplot('chart2', [s2], {
					// Only animate if we're not using excanvas (not in IE 7 or IE 8)..
					animate: !$.jqplot.use_excanvas,
					seriesDefaults:{
						renderer:$.jqplot.BarRenderer,
						pointLabels: { show: true }
					},
					axes: {
						xaxis: {
							renderer: $.jqplot.CategoryAxisRenderer,
							ticks: ticks2
						},
						yaxis: {
							pad: 1.05,
							tickOptions: {formatString: 'Rp.%\'d' }
						}
						
					},
					highlighter: { show: false }
				
			 
				});
				
				
				$.jqplot.config.enablePlugins = true;
				var s1 = [14000, 16000, 17000, 18000,14000, 16000, 17000, 18000,14000, 16000, 17000, 18000,20000];
				var ticks1 = ['Harta<br/>Benda', 'Kendaraan<br/>Bermotor', 'Pengangkutan', 'Rangka<br/>Kapal','Rangka<br/>Pesawat', 'Satelit', 'Energi', 'Rekayasa','Tanggung<br/>Gugat', 'Kecelakaan', 'Kredit', 'Suretyship','Aneka'];
				 
			   plot1 = $.jqplot('chart1', [s1], {
					// Only animate if we're not using excanvas (not in IE 7 or IE 8)..
					animate: !$.jqplot.use_excanvas,
					seriesDefaults:{
						renderer:$.jqplot.BarRenderer,
						pointLabels: { show: true }
					},
					axes: {
						xaxis: {
							renderer: $.jqplot.CategoryAxisRenderer,
							ticks: ticks1
						},
						yaxis: {
							pad: 1.05,
							tickOptions: {formatString: 'Rp.%\'d' }
						}
						
					},
					highlighter: { show: false }
				
			 
				});
				
	var s3 = [['Harta<br/>Benda',7], ['Kendaraan Bermotor',13.3], ['Pengangkutan',14.7], ['Rangka Kapal',5.2], ['Rangka Pesawat', 1.2],
	          ['Satelit',7], ['Energi',13.3], ['Rekayasa',14.7], ['Tanggung Gugat',5.2], ['Kecelakaan', 1.2] ,
			  ['Kecelakaan',7], ['Kredit',13.3], ['Suretyship',14.7], ['Aneka',5.2] 
			 ];
         
    var plot3 = $.jqplot('chart3', [s3], {
        grid: {
           // drawBorder: false,
          //  drawGridlines: false,
           // shadow:false
        },
        axesDefaults: {
             
        },
        seriesDefaults:{
            renderer:$.jqplot.PieRenderer,
            rendererOptions: {
                showDataLabels: true
            }
        },
        legend: {
            show: true,
			
        }
    }); 

				
			 
     
       
});
</script>
		
	 

<div class="ui-layout-center" style="display: none;"> 
	<h3 class="ui-widget-header">Dashboard Panel >> Dashboard</h3>
	
    <!-- <p class="ui-layout-content ui-widget-content"> <img src="<?=base_url()?>public/file/gambar/emplooye.jpg" width="446" height="460" />--> 
	
	<div id="tabs">
		<ul>
		
			<li><a href="#tabs1">R/I COMM</a></li>	
			<li><a href="#tabs2">PREMI</a></li>
			<li><a href="#tabs3">Cabang Asuransi</a></li>		
			
			
		</ul>
		     <div id="tabs1">				
	             <div id="chart1" style="margin-top:20px; margin-left:20px; width:800px; height:400px;"></div>
			</div>
			<div id="tabs2">				
	             <div id="chart2" style="margin-top:20px; margin-left:20px; width:800px; height:400px;"></div>
			</div>
			 <div id="tabs3">				
	             <div id="chart3" style="height:400px; width:700px;margin-left:20px;margin-top:20px;"></div>
			</div>
			
		   
			
	</div>
	
	  
	 
	  
	 </p>
</div>