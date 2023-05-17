<?php
session_start();

if(isset($_SESSION["user"])){
	if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
		//header("location: ../login.php");
	}else{
		$useremail=$_SESSION["user"];
	}

}else{
	header("location: ../login.php");
}

?>
<!doctype html>

<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">

	<!-- disable iPhone scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<title>Skin Disease Analyzer</title>
	<meta name="description" content="Upload a photo of your skin disease on your web, and this will analyze the skin disease type and show you the most relevant information.">
	<!-- main css -->
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!-- media queries css -->
	<link href="css/media-queries.css" rel="stylesheet" type="text/css">

	<!-- lets you use only unprefixed CSS properties  -->
	<script src="prefixfree/1-0-7/prefixfree.dynamic-dom.min.js"></script>
	<!-- jQuery -->
	<script src="ajax/libs/jquery/1-10-2/jquery.min.js"></script>
	<script src="ajax/libs/jqueryui/1-8/jquery-ui.min.js"></script>
	<script src="js/jsapi.js"></script>
	<script src="js/main.js"></script>

</head>

<body>
		</style>
	<div id="pagewrap" data-nav="home">
		<a id="site-logo" href="index.html" title="Home"></a>
		<header id="header">
		
			<div id="header-center">


				<nav>
					<ul id="main-nav">
				
						<li><a href="./doctor/index.php" class="non-style-link-menu">Go Back</a></li>

						<li style="float:right"><a href="logout.php" class="non-style-link-menu">Logout</a></li>
					</ul>
					<!-- /#main-nav -->
				</nav>
			</div>
		</header>

	</div>

	<!--CSS Stylesheets-->
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/skin.css">

	<!--Link to Font Awesome icons-->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>



	<!--Link to fonts from google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="shortcut icon" type="image/png" href="logoSA.png">


	<style>
		html,
		body,
		h2,
		h3,
		h4,
		p,
		h5,
		li {
			font-family: Roboto, sans-serif
		}
	</style>


	</head>

	
		<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content. -->
		<div class="w3-content" style="max-width:960px">


			<!--</div>-->
			<!-- Front page image -->
			<!-- This image will be replaced once the js code runs. -->
			<div class="panel-inside">
			<div id="panel9-sq1">
				<div class="w3-center add-margin w3-padding-bottom">
					<img id="selected-image" class="w3-round adjust-image" src="assets/skind.jpg" height="250" alt="Image for analysis">
				</div>
				<!-- Button -->

				<div id="btnn" class="w3-center">
					<button class="w3-btn w3-deep-black w3-hover-blue w3-round w3-margin-bottom adjust-spacing btn-font w3-padding w3-space-letters w3-text-white" onclick="setTimeout(simulateClick.bind(null, 'image-selector'), 200)"><i class='fas fa-camera w3-padding-center' style='font-size:15px'></i>
						<b>Select Skin Disease to Analyze</b></button>
				</div>
				<div id="btnn" class="w3-center">
					<p class="w3-round w3-margin-bottom adjust-spacing w3-space-letters w3-text-white">Please select .jpeg or .png file</p>

				</div>
				<div class="w3-center">
					<div class="progress-bar w3-text-white">
						<i class="fa fa-spinner w3-spin" style="font-size:24px"></i>
						<p>Model is loading...</p>
					</div>
				</div>

				<!-- Progress Bar 
				Just here for graphics.
				The functionality was not implemented because it slows down the model download 
				and causes it to fail.-->
				<!--<div class="w3-light-grey side-margin w3-opacity">
				<div id="myBar" class="w3-container w3-black" style="height:5px;width:100%"></div>
			</div>-->

			</div>
			<div id="panel9-sq2">


			</div>


			<!-- Results Box -->

			<div class="w3-center add-margin w3-round bottom-margin dont-break-out">

				<h3 class="center-title w3-text-white w3-animate-top">Results</h3>


				<ol class='w3-left-align text-color w3-justify' id='prediction-list'></ol>
				<a href="#skin" class='w3-text-white'>Click here for Diagnosis</a>
			</div>
		</div>
		</div>
		<!-- Bottom Bar-->
		<!--END OF HOME PAGE-->



		<!-- We simulate clicks on these two. -->
		<div class="hide">
			<button id='predict-button'>Predict</button>
		</div>

		<div class="hide">
			<input id="image-selector" type="file" multiple>
		</div>
		<!--===================================-->


		<!-- Load jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

		</script>


		<!--Load TensorFlow.js--->
		<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.6.0/dist/tf.min.js">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.13.3/dist/tf.min.js">
		</script>

		<!-- Load the js files -->
		<script src="jscript/target_classes.js"></script>
		<script src="jscript/app_startup_code.js"></script>
		<script src="jscript/app_batch_prediction_code.js"></script>

		</div> 
		<!-- w3-content -->

<!-- /#footer -->
		<footer id="footer">
			&copy; 2022, Inc. All rights reserved
			<div class="panel-inside">
				This web-app is a communication tool that provides initial comparative information about skin disease. This information comes from tested model using HAM10000 Dataset. Outcome of skin diagnose comparisons is only effective when discussed with a qualified health care provider.
			</div>
		</footer>

		
	</body>

</html>