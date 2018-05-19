<!DOCTYPE html>
<?php
	require "connect.php";
	$quality = $_GET["w_quality"];
	$date = $_GET["date"];
	$position = $_GET["position"];

	$positions_query = "SELECT * FROM positions WHERE Position='".$position."'";
	$is_positions_query_run = mysqli_query($connect,$positions_query);
	$positions_execute = mysqli_fetch_assoc($is_positions_query_run);
	$readings_query = "SELECT * FROM readings WHERE PositionID='".$positions_execute["ID"]."'AND Date='".$date."'";
	$is_readings_query_run = mysqli_query($connect,$readings_query);
	$reading_execute = mysqli_fetch_assoc($is_readings_query_run);
	$dateForJS = str_replace("-",",",$date);
	echo $dateForJS;

?>
<?php
 
$dataPoints = array(
	array("label"=> 1997, "y"=> 254722.1),
	array("label"=> 1998, "y"=> 292175.1),
	array("label"=> 1999, "y"=> 369565),
	array("label"=> 2000, "y"=> 284918.9),
	array("label"=> 2001, "y"=> 325574.7),
	array("label"=> 2002, "y"=> 254689.8),
	array("label"=> 2003, "y"=> 303909),
	array("label"=> 2004, "y"=> 335092.9),
	array("label"=> 2005, "y"=> 408128),
	array("label"=> 2006, "y"=> 300992.2),
	array("label"=> 2007, "y"=> 401911.5),
	array("label"=> 2008, "y"=> 299009.2),
	array("label"=> 2009, "y"=> 319814.4),
	array("label"=> 2010, "y"=> 357303.9),
	array("label"=> 2011, "y"=> 353838.9),
	array("label"=> 2012, "y"=> 288386.5),
	array("label"=> 2013, "y"=> 485058.4),
	array("label"=> 2014, "y"=> 326794.4),
	array("label"=> 2015, "y"=> 483812.3),
	array("label"=> 2016, "y"=> 254484)
);
	
?>
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
	//theme: "light2",
	title:{
		text: "Salmon Production - 1997 to 2006"
	},
	axisX:{
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY:{
		title: "in Metric Tons",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	toolTip:{
		enabled: false
	},
	data: [{
		type: "area",
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
   src='http://maps.google.com/maps?f=q=colombo&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=".$positions_execute["Latitude"].",".$positions_execute["Longitude"].
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