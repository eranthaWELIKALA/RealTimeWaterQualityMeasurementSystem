<!DOCTYPE html>
<html lang="en">
<head>
	<title>ABC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
/*.limiter.img{
	border-radius: 50%;
}*/
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Conductivity"
	},
	axisX: {
		minimum: new Date(2015, 01, 25),
		maximum: new Date(2019, 02, 15),
		valueFormatString: "MMM YY"
	},
	axisY: {
		title: "Quality",
		titleFontColor: "#4F81BC",
		suffix: "mn"
	},
	data: [{
		indexLabelFontColor: "darkSlateGray",
		name: "views",
		type: "area",
		yValueFormatString: "#,##0.0mn",
		dataPoints: [
			{ x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
			{ x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
			{ x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
			{ x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
			{ x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
			{ x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
			{ x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
			{ x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
			{ x: new Date(2017, 02, 1), y: 74.4, label: "Q1-2017" },
			{ x: new Date(2017, 05, 1), y: 61.1, label: "Q2-2017" },
			{ x: new Date(2017, 08, 1), y: 47.0, label: "Q3-2017" },
			{ x: new Date(2017, 11, 1), y: 48.0, label: "Q4-2017" },
			{ x: new Date(2018, 02, 1), y: 74.8, label: "Q1-2018" },
			{ x: new Date(2018, 05, 1), y: 51.1, label: "Q2-2018" },
			{ x: new Date(2018, 08, 1), y: 40.4, label: "Q3-2018" },
			{ x: new Date(2018, 11, 1), y: 45.5, label: "Q4-2018" },
			{ x: new Date(2019, 02, 1), y: 78.3, label: "Q1-2019", indexLabel: "Highest", markerColor: "red" }
		]
	}]
});
chart.render();
var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title: {
		text: "Temperature"
	},
	axisX: {
		minimum: new Date(2015, 01, 25),
		maximum: new Date(2019, 02, 15),
		valueFormatString: "MMM YY"
	},
	axisY: {
		title: "Quality",
		titleFontColor: "#4F81BC",
		suffix: "mn"
	},
	data: [{
		indexLabelFontColor: "darkSlateGray",
		name: "views",
		type: "area",
		yValueFormatString: "#,##0.0mn",
		dataPoints: [
			{ x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
			{ x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
			{ x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
			{ x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
			{ x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
			{ x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
			{ x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
			{ x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
			{ x: new Date(2017, 02, 1), y: 74.4, label: "Q1-2017" },
			{ x: new Date(2017, 05, 1), y: 61.1, label: "Q2-2017" },
			{ x: new Date(2017, 08, 1), y: 47.0, label: "Q3-2017" },
			{ x: new Date(2017, 11, 1), y: 48.0, label: "Q4-2017" },
			{ x: new Date(2018, 02, 1), y: 74.8, label: "Q1-2018" },
			{ x: new Date(2018, 05, 1), y: 51.1, label: "Q2-2018" },
			{ x: new Date(2018, 08, 1), y: 40.4, label: "Q3-2018" },
			{ x: new Date(2018, 11, 1), y: 45.5, label: "Q4-2018" },
			{ x: new Date(2019, 02, 1), y: 78.3, label: "Q1-2019", indexLabel: "Highest", markerColor: "red" }
		]
	}]
});
chart1.render();
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "Turbidity"
	},
	axisX: {
		minimum: new Date(2015, 01, 25),
		maximum: new Date(2019, 02, 15),
		valueFormatString: "MMM YY"
	},
	axisY: {
		title: "Quality",
		titleFontColor: "#4F81BC",
		suffix: "mn"
	},
	data: [{
		indexLabelFontColor: "darkSlateGray",
		name: "views",
		type: "area",
		yValueFormatString: "#,##0.0mn",
		dataPoints: [
			{ x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
			{ x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
			{ x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
			{ x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
			{ x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
			{ x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
			{ x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
			{ x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
			{ x: new Date(2017, 02, 1), y: 74.4, label: "Q1-2017" },
			{ x: new Date(2017, 05, 1), y: 61.1, label: "Q2-2017" },
			{ x: new Date(2017, 08, 1), y: 47.0, label: "Q3-2017" },
			{ x: new Date(2017, 11, 1), y: 48.0, label: "Q4-2017" },
			{ x: new Date(2018, 02, 1), y: 74.8, label: "Q1-2018" },
			{ x: new Date(2018, 05, 1), y: 51.1, label: "Q2-2018" },
			{ x: new Date(2018, 08, 1), y: 40.4, label: "Q3-2018" },
			{ x: new Date(2018, 11, 1), y: 45.5, label: "Q4-2018" },
			{ x: new Date(2019, 02, 1), y: 78.3, label: "Q1-2019", indexLabel: "Highest", markerColor: "red" }
		]
	}]
});
chart2.render();
var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	title: {
		text: "pH"
	},
	axisX: {
		minimum: new Date(2015, 01, 25),
		maximum: new Date(2019, 02, 15),
		valueFormatString: "MMM YY"
	},
	axisY: {
		title: "Quality",
		titleFontColor: "#4F81BC",
		suffix: "mn"
	},
	data: [{
		indexLabelFontColor: "darkSlateGray",
		name: "views",
		type: "area",
		yValueFormatString: "#,##0.0mn",
		dataPoints: [
			{ x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
			{ x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
			{ x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
			{ x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
			{ x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
			{ x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
			{ x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
			{ x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
			{ x: new Date(2017, 02, 1), y: 74.4, label: "Q1-2017" },
			{ x: new Date(2017, 05, 1), y: 61.1, label: "Q2-2017" },
			{ x: new Date(2017, 08, 1), y: 47.0, label: "Q3-2017" },
			{ x: new Date(2017, 11, 1), y: 48.0, label: "Q4-2017" },
			{ x: new Date(2018, 02, 1), y: 74.8, label: "Q1-2018" },
			{ x: new Date(2018, 05, 1), y: 51.1, label: "Q2-2018" },
			{ x: new Date(2018, 08, 1), y: 40.4, label: "Q3-2018" },
			{ x: new Date(2018, 11, 1), y: 45.5, label: "Q4-2018" },
			{ x: new Date(2019, 02, 1), y: 78.3, label: "Q1-2019", indexLabel: "Highest", markerColor: "red" }
		]
	}]
});
chart3.render();
}
</script>

</head>
<body>
	<div class="container">
		<div class="row" v-align="middle">
			<div class="col-md-4 col-sm-4">
				<img src="images/logo.png" alt="IMG" height="100" width="100" align="right">
			</div>
			<div class="col-md-6 col-sm-8">
				<h4 align="center">Real Time Water Quality Measurement System</h4>
			</div>
		</div>
	</div>
	
	<div class="limiter">
		<div class="container-login100">

	<br>
	<div style="float:left;width:10%;background-color: grey;min-height:468px;"></div>
	<div style="float:right;width:90%;">
		<div class="container" style="height: 105px;background-color: white;">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-inverted">
					<h3>Conductivity</h3>
					<tbody>
						<tr>
							<td>01-02-2018</td><td>Peradeniya</td><td>555.0</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<div id="chartContainer" style="height: 100px; max-width: 100%; margin: 0px auto; float:right; width:75%;"></div>
			</div>
		</div>
	</div>
	<br>
	<div class="container" style="height: 105px;background-color: white;">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-inverted">
					<h3>Temperature</h3>
					<tbody>
						<tr>
							<td>01-02-2018</td><td>Peradeniya</td><td>555.0</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<div id="chartContainer1" style="height: 100px; max-width: 100%; margin: 0px auto; float:right; width:75%;"></div>
			</div>
		</div>
	</div>
	<br>
	<div class="container" style="height: 105px;background-color: white;">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-inverted">
					<h3>Turbidity</h3>
					<tbody>
						<tr>
							<td>01-02-2018</td><td>Peradeniya</td><td>555.0</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<div id="chartContainer2" style="height: 100px; max-width: 100%; margin: 0px auto; float:right; width:75%;"></div>
			</div>
		</div>
	</div>
	<br>
	<div class="container" style="height: 105px;background-color: white;">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-inverted">
					<h3>pH Value</h3>
					<tbody>
						<tr>
							<td>01-02-2018</td><td>Peradeniya</td><td>555.0</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<div id="chartContainer3" style="height: 100px; max-width: 100%; margin: 0px auto; float:right; width:75%;"></div>
			</div>
		</div>
	</div>
	</div>
	<div><br>
		<?php
echo "
<iframe 
   width='600' 
   height='350' 
   frameborder='0' 
   scrolling='no' 
   marginheight='0' 
   marginwidth='0' 
   src='http://maps.google.com/maps?f=q=colombo&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=".$_GET["lat"].",".$_GET["lng"].
   "(custom heading)&amp;output=embed'>
</iframe>";
?><div class="centered">Centered</div>
	</div>
	

		</div>
	</div>

	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<script>
		function myMap() {
		var mapOptions = {
		    center: new google.maps.LatLng(51.5, -0.12),
		    zoom: 10,
		    mapTypeId: google.maps.MapTypeId.HYBRID
		}
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</body>
</html>