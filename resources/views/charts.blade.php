<?php
$dataPoints = array();
foreach($data as $key=>$value)
{
	$dataPoints[] = array("label"=> $key, "y"=> $value);
}

// echo '<pre>';
// print_r($dataPoints);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "laravel pie chart"
	},
	subtitles: [{
		text: "pie chart"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",

		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>


	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
