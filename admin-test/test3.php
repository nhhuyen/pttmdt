<?php
 
$dataPoints1 = array(
	array("label"=> "Tháng 1", "y"=> 2016456 ),
	array("label"=> "Tháng 2", "y"=> 1985801 ),
	array("label"=> "2009", "y"=> 1755904 ),
	array("label"=> "2010", "y"=> 1847290 ),
	array("label"=> "2011", "y"=> 1733430 ),
	array("label"=> "2012", "y"=> 1514043 ),
	array("label"=> "2013", "y"=> 1581115 ),
	array("label"=> "2014", "y"=> 1581710 ),
	array("label"=> "2015", "y"=> 1352398 ),
	array("label"=> "2016", "y"=> 1239149 )
);
 

 
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", { 
	theme: "light2",
	title: {
		text: "Generation of Electricity in US - 2007 to 2016"
	},
	subtitles: [{
		text: "In Gigawatt Hours"
	}],
	axisY: {
		includeZero: false
	},
	legend:{
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	toolTip: {
		shared: true
	},
	data: [{
		type: "stackedArea",
		name: "Coal",
		showInLegend: true,
		visible: false,
		yValueFormatString: "#,##0 GWh",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}
	{
		type: "stackedArea",
		name: "Hydroelectric",
		showInLegend: true,
		visible: false,
		yValueFormatString: "#,##0 GWh",
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	},
	{
		type: "stackedArea",
		name: "Solar",
		showInLegend: true,
		yValueFormatString: "#,##0 GWh",
		dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                    