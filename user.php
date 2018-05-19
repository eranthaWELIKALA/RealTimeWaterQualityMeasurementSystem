<!DOCTYPE html>
<?php
	require "connect.php";
	session_start();
	$data_retrieve_query = "SELECT * FROM users WHERE email='".$_SESSION["email"]."'";
	$is_data_retrieve_query_run = mysqli_query($connect,$data_retrieve_query);
	$data_execute = mysqli_fetch_assoc($is_data_retrieve_query_run);
	$_SESSION["lastname"]=$data_execute["Lastname"];
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
img{
	border-radius: 50%;
}
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
			<div id="one" class="container">
				<div class="row">
					<div class="container" style="float: left;width: 50%">
					<h1>RTWQMS</h1> Real Time Water Quality Measurement System<br>
				</div>
				<div class="container" style="float: right;width: 50%">
					<div class="row" align>
						<div class="col-md-6 col-sm-6"></div>
						<div class="col-md-2 col-sm-2">
							<img src="images/user.png" alt="IMG" alt="IMG" height="60" width="60">
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="user_name">
								<label><h4><b><?php echo $data_execute["Lastname"]; ?></b></h4></label><br>
								<?php echo $data_execute["Firtsname"]." ".$data_execute["Lastname"]; ?>
							</div>
						</div>
					</div>
				</div>
				</div>
				
	
	<div class="row">
		<div class="col-md-10" style="background-color: silver;min-height:500px;"><br>
			<h3>Searching Area</h3>
			<div class="row">
				<div class="col-md-6">
					<label>Search Quality</label>
				</div>
				<div class="col-md-1">:</div>
				<div class="col-md-4">
					<!-- <input class="form-control" type="text" v-model="w_quality" placeholder="ex : temperature"> -->
					<select v-model="qSelected" class="form-control" size="1">
						<option disabled>Select the Quality</option>
						<option>Temperature</option>
						<option>pH</option>
						<option>Conductivity</option>
						<option>Turbidity</option>
						<option>All</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Search Date</label>
				</div>
				<div class="col-md-1">:</div>
				<div class="col-md-4">
					<input class="form-control" type="date" v-model="date" >
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Search Place</label>
				</div>
				<div class="col-md-1">:</div>
				<div class="col-md-4"> 
					<input class="form-control" type="text" v-model="position" placeholder="ex : peradeniya">
				</div>
				<div class="col-md-2"><button class="btn btn-danger" v-on:click="clear"> <span class="glyphicon glyphicon-refresh"></span> </button></div>
			</div>
			
		</div>
		<div class="col-md-2" style="min-height:500px;"><br>
			<h3>Display Area</h3>
			<button class="btn btn-success" v-bind:class="{hidden:selectedQ}" v-on:click="wq_url" >{{qSelected}}</button> <br><br>
			<button class="btn btn-success" v-bind:class="{hidden:selectedD}" v-on:click="date_url" >{{date}}</button> <br><br>
			<button class="btn btn-success" v-bind:class="{hidden:selectedP}" v-on:click="position_url" >{{position}}</button><br><br>
			<button class="btn btn-success" v-on:click="get_request_url">View</button>
		</div>
		</div>
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
	<script>
		var one = new Vue({
			el : '#one',
			data : {
				qSelected : "",
				date : "",
				position : "",
				get_request : "http://localhost/User/viewAll.php?"
			},
			methods:{
			wq_url : function(){
				this.get_request = this.get_request+"w_quality="+this.qSelected+"&date=&position=";
				window.location.href = this.get_request;
			},
			date_url : function(){
				this.get_request = this.get_request+"w_quality=&date="+this.date+"&position=";
				window.location.href = this.get_request;
			},
			position_url : function(){
				this.get_request = this.get_request+"w_quality=&date=&position="+this.position;
				window.location.href = this.get_request;
			},
			get_request_url : function(){
				this.get_request = this.get_request+"w_quality="+this.qSelected+"&date="+this.date+"&position="+this.position;
				
				//this.get_request = "localhost/User/view.php?w_quality="+this.w_quality+"&date="+this.date+"&position"+this.position;
				window.location.href = this.get_request;
			},
			clear : function(){
				this.qSelected = "";
				this.date = "";
				this.position = "";
			}
			},
			computed: {
				selectedQ : function(){
					if(this.qSelected==""){
						return true;
					}
				},
				selectedD : function(){
					if(this.date==""){
						return true;
					}
				},
				selectedP : function(){
					if(this.position==""){
						return true;
					}
				}

			}
		})
	</script>

</body>
</html>