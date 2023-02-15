<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "index.html";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Skin Disease Analyzer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Use the power of Machine Learning to diagnose Skin Lesions.">



<!--CSS Stylesheets-->
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/skin.css">

<!--Link to Font Awesome icons-->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>



<!--Link to fonts from google fonts-->
<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


<link rel="shortcut icon" type="image/png" href="robotfavicon.png">


<style>
html,body,h2,h3,h4,p,h5,li {font-family: Roboto, sans-serif}
</style>


</head>




<body class="bground-color">



<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content. -->
<div class="w3-content" style="max-width:960px">



<!-- 1. HOME PAGE -->
<div class="tabbed w3-animate-opacity w3-white" id="home">
	
	
<!-- Top Bar -->
<div class='w3-center'>
	<p class="space-letters-large w3-small w3-tag bground-color w3-text-teal w3-border w3-round">
		<a class="change-size" href="logout.php"><b>Logout</b></a>
	<!--<p class="space-letters-large w3-small w3-tag bground-color w3-text-teal w3-border w3-round">
		<a class="change-size" href="faq.html"><b>About</b></a>-->

</div>




	

<!-- Front page image -->
<!-- This image will be replaced once the js code runs. -->
<div class="w3-center w3-padding-bottom">
	

	<img id="selected-image" class="w3-round adjust-image" src="assets/skind.jpg" height="250" alt="Image for analysis"> 
	
</div> 




<!-- Button -->
<div id="btnn" class="w3-center">
	
	<button class="w3-btn w3-deep-orange w3-hover-blue w3-round w3-margin-bottom adjust-spacing btn-font w3-padding w3-space-letters w3-text-white" onclick="setTimeout(simulateClick.bind(null, 'image-selector'), 200)"><i class='fas fa-camera w3-padding-right' style='font-size:15px'></i>
		<b>Select Skin Disease to Analyze</b></button>
	<!--<p class="w3-text-teal">jpeg or png</p>-->
</div> 



<div class="w3-center">
	<div  class="progress-bar w3-text-teal space-letters">
	<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
	<p>Model is loading...</p></div>
</div>

<!-- Progress Bar 
Just here for graphics.
The functionality was not implemented because it slows down the model download 
and causes it to fail.-->
<div class="w3-light-grey side-margin w3-opacity">
<div  id="myBar" class="w3-container w3-blue" style="height:5px;width:100%"></div>
</div>


<!-- Results Box -->
<div class="w3-center w3-border add-margin side-margin w3-round w3-sand
text-color space-letters bottom-margin dont-break-out">

	<p>Results</p>
	
	<!-- Remember that an ordered or unordered list has tabs by default.
	CSS is not styling the prediction outputs. The tabs you see are the default
	tabs associated with lists.-->
	<ol class='w3-left-align text-color' id='prediction-list'></ol>
		
</div>




<!-- Bottom Bar -->
<div class='w3-center w3-padding-bottom'>
	<p class="space-letters">
		<a class="w3-small w3-hover-text-deep-orange text-color" href="index.html">
		<b>Skin Disease Analyzer</b></a>
	</p>
</div>


</div><!--END OF HOME PAGE-->



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
	
	
	<!--Load TensorFlow.js
	<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.6.0/dist/tf.min.js"> 
	</script>-->
	<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.13.3/dist/tf.min.js"> 
	</script>
	
	
	<!-- Load the js files -->
	<script src="jscript/target_classes.js"></script>
	<script src="jscript/app_startup_code.js"></script>
	<script src="jscript/app_batch_prediction_code.js"></script>
	
	
	
	
	
</div> <!-- w3-content -->

</body>
</html>

