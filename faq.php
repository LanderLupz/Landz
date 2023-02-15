<!doctype html>
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
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">

<!-- disable iPhone scale -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>Skin Disease Analyzer</title>
<meta name="description" content="Upload a photo of your skin disease on your web, and this will analyze the skin disease type and show you the most relevant information.">
<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- media queries css -->
<link href="css/media-queries.css" rel="stylesheet" type="text/css">
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- lets you use only unprefixed CSS properties  -->
<script  src="prefixfree/1-0-7/prefixfree.dynamic-dom.min.js"></script>
<!-- jQuery -->
<script src="ajax/libs/jquery/1-10-2/jquery.min.js"></script>
<script src="ajax/libs/jqueryui/1-8/jquery-ui.min.js"></script>
<script src="js/jsapi.js"></script>
<script  src="js/main.js"></script>
<!-- Google Analytics tracking code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-48354920-1', 'lubax.com');
  ga('send', 'pageview');
</script>
</head>
<body>
<div id="pagewrap" data-nav="home">
		<a id="site-logo" href="index.html" title="Home"></a>
	<header id="header">
		<div id="header-center">
			
			
			<nav>
				<ul id="main-nav">
					<li><a href="faq.php" class="nav">Skin Diseases</a></li>
					<li><a href="#how" class="nav">About Us</a></li>
					<li><a href="#news" class="nav">News</a> </li>
					<li><a href="#" class="nav">FAQs</a></li>
					<li><a href="logout.php" class="nav">Logout</a></li>
				</ul>
				<!-- /#main-nav --> 
			</nav>
		</div>
	</header>
	
	</div>
	
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


<link rel="shortcut icon" type="image/png" href="img/logoSA.png">


<style>
html,body,h2,h3,h4,p,h5,li {font-family: Roboto, sans-serif}
</style>


</head>

	

	


<!-- 960 width region -->
<div class='w3-content w3-padding w3-white' style="max-width:960px">
	



<div class="w3-center title adjust-fontcolor logo w3-center w3-margin">
	
	<img class='w3-round' src="css/img/logoSA.png" alt="Logo" height='200' width='200'>
	
</div>


<!-- Top Bar -->
<div class='w3-center'>
	
	<p class="space-letters w3-tag bground-color w3-text-teal w3-border w3-round">
		<a href="index.html"><i class="fa fa-angle-double-left" style="font-size:20px"></i><b> Go back to Analyzer...</b></a>
</div>
	



<div class='bottom-margin'>
	
	
	<!-- Start of block -->
	<div class='side-margin1 w3-round text-color space-letters 
	w3-margin-bottom'>
	
			<p class='w3-text-pink topp-margin'><b>Design Status</b></p>
			
			<p>This is a prototype.</p>
			
			
			<p class='w3-text-pink topp-margin'><b>Purpose</b></p>
			
			<p>This web app uses computer vision to identify the three highest probability diagnoses for a skin lesion. A more advanced version could be used to identify cancerous skin lesions early.</p>
			
			
			<p class='w3-text-pink topp-margin'><b>Lesion Types</b></p>
			
			<p>The following descriptions were taken from this <a class="w3-text-blue" href="https://arxiv.org/abs/1803.10417">research paper.</a></p>
			
			
			
<p>nv<br>
<span class="w3-text-teal">Melanocytic nevi are benign neoplasms of melanocytes and appear in a myriad of variants, which all are included in our series. The variants may differ significantly from a dermatoscopic point of view.</span></p>

<p>mel<br>
<span class="w3-text-teal">Melanoma is a malignant neoplasm derived from melanocytes that may appear in different variants. If excised in an early stage it can be cured by simple surgical excision. Melanomas can be invasive or non-invasive (in situ). We included all variants of melanoma including melanoma in situ, but did exclude non-pigmented, subungual, ocular or mucosal melanoma.</span></p>

<p>bkl<br>
<span class="w3-text-teal">"Benign keratosis" is a generic class that includes seborrheic ker- atoses ("senile wart"), solar lentigo - which can be regarded a flat variant of seborrheic keratosis - and lichen-planus like keratoses (LPLK), which corresponds to a seborrheic keratosis or a solar lentigo with inflammation and regression [22]. The three subgroups may look different dermatoscop- ically, but we grouped them together because they are similar biologically and often reported under the same generic term histopathologically. From a dermatoscopic view, lichen planus-like keratoses are especially challeng- ing because they can show morphologic features mimicking melanoma [23] and are often biopsied or excised for diagnostic reasons.</span></p>

<p>bcc<br>
<span class="w3-text-teal">Basal cell carcinoma is a common variant of epithelial skin cancer that rarely metastasizes but grows destructively if untreated. It appears in different morphologic variants (flat, nodular, pigmented, cystic, etc) [21], which are all included in this set.</span></p>

<p>akiec<br>
<span class="w3-text-teal">Actinic Keratoses (Solar Keratoses) and intraepithelial Carcinoma (Bowen’s disease) are common non-invasive, variants of squamous cell car- cinoma that can be treated locally without surgery. Some authors regard them as precursors of squamous cell carcinomas and not as actual carci- nomas. There is, however, agreement that these lesions may progress to invasive squamous cell carcinoma - which is usually not pigmented. Both neoplasms commonly show surface scaling and commonly are devoid of pigment. Actinic keratoses are more common on the face and Bowen’s disease is more common on other body sites. Because both types are in- duced by UV-light the surrounding skin is usually typified by severe sun damaged except in cases of Bowen’s disease that are caused by human papilloma virus infection and not by UV. Pigmented variants exists for Bowen’s disease [19] and for actinic keratoses [20]. Both are included in this set.</span></p>

<p>vasc<br>
<span class="w3-text-teal">Vascular skin lesions in the dataset range from cherry angiomas to angiokeratomas [25] and pyogenic granulomas [26]. Hemorrhage is also included in this category.</span></p>

<p>df<br>
<span class="w3-text-teal">Dermatofibroma is a benign skin lesion regarded as either a benign proliferation or an inflammatory reaction to minimal trauma. It is brown often showing a central zone of fibrosis dermatoscopically [24].</span></p>
			
			
			
			
			
			<p class='w3-text-pink topp-margin'><b>Image format</b></p>
			
			<p>The app accepts images in jpg or png format.</p>
			
			

			
			<p class='w3-text-pink topp-margin'><b>Limitations</b></p>
			
			<p>The Ai brain (model) that powers this app is not skilled enough to consistently assign the highest score to the correct lesion. Also, the model is not very good at detecting melanoma. That said, during testing the correct lesion was regularly among the top three predicted lesions.</p>
			
			<p>The model was not trained using photos that were taken with a mobile phone. Therefore, the model's prediction accuracy could be affected by variations in the quality of mobile phone images.</p>
			

			<p class='w3-text-pink topp-margin'><b>Published Design</b></p>
			
			<p>The design code and the step-by-step process used to train and test the model has been published on Kaggle. You can find the open source notebook <a class="w3-text-blue" href="https://www.kaggle.com/vbookshelf/skin-lesion-analyzer-tensorflow-js-web-app" target='_blank' class="w3-text-blue">here</a>. The test results are also available in the notebook.</p>
			
			
			<p class='w3-text-pink topp-margin'><b>Dataset Licence</b></p>
			
			<p>The model was trained using image <a class="w3-text-blue" href="https://www.kaggle.com/kmader/skin-cancer-mnist-ham10000">data</a> that was released under a CC BY-NC-SA 4.0 licence. That means that this app cannot be used for commercial purposes.</p>
			
			<hr>
			
			
			
			
			<!-- FAQ Section -->
			
			
			<div class="w3-center title adjust-fontcolor logo w3-center w3-margin">
	
			<h1 class="space-letters w3-text-pink"><b>FAQ</b></h1>

			</div>
			
			
			
			<p class='w3-text-black topp-margin'><b>Will I need to wait for the model to download every time I use the app?</b></p>
			
			<p>No. Once the model downloads it will be cached in memory. The next time you visit this site you won’t need to wait.</p>
			
			<p>That said, I suggest that you always use this tool with your web browser set to incognito mode. The model won’t be saved, but this will ensure that each time you visit this site you will always use the most up to date version of the model and not the old one that's stored in your device's memory.
			</p>
			
			
			
			<p class='w3-text-black topp-margin'><b>What about patient data privacy?</b></p>
			
			<p>Your images are never sent to an external server. Any image you submit stays on your computer or mobile phone. This is because the model is running on your device. This is also why a batch of images can be analyzed in less than two seconds.</p>
			
			<p>The tech that makes this possible is called Tensorflow.js. It was created by Google.</p>
			
			
			
			
			
			
			<p class='w3-text-black topp-margin'><b>What do the decimal numbers mean?</b></p>
			
			<p>They are probability scores between 0 and 1. They show how confident the model is that a particular condition is present on the image. <br>
				For example, <i>mel, Melanoma: 0.231</i> means that the model is 23% sure that the lesion shown in the image is melanoma.</p>
			
			
			
			
			
			
			<p class='w3-text-black topp-margin'><b>How do I use this app on a computer?
			</b></p>
			
			<p>- Go to this site on your computer.<br>
				- Click the orange button.<br>
			- Select one image or multiple images and click ‘Open’.<br>
			- The app will print results for each image.
			</p>
			
			
			
			
			
			<p class='w3-text-black topp-margin'><b>How do I use this app on a mobile phone?
			</b></p>
			
			<p>You can take a new photo or you can submit photos that are stored on your phone. The steps below apply to Android. iOS may be similar but I'm not sure.</p>
			
			<p class="w3-text-pink"><b>[ 1 ] Take a photo</b></p>
			<p>- Go to this site on your phone.<br>
			- Tap the orange button.<br>
			- Select “Camera”<br>
			- Take a photo<br>
			- Tap the "tick"<br>
			- The photo will be sent to the app for analysis.
			</p>
			
			
			<p class="w3-text-pink"><b>[ 2 ] Use images from your photo folder</b></p>
			<p>- Go to this site on your phone.<br>
				- Tap the orange button.<br>
				- Tap "Files"<br>
				- Tap the image name<br>
				- To submit a batch of images, tap each image (tick) to select it and then tap "Open". 
			</p>
			
			
			
				
			<p class='w3-text-black topp-margin'><b> What would it take to make this tool more trustworthy?</b></p>
			
			<p>Three things are needed:<br>
				- Collaboration with a dermatologist/pathologist.<br>
				- More high quality labeled training data.<br>
				- Field testing.</p>
			
			<p>Ai systems can be brittle. Good training scores don't guarantee that a model will perform well under real-world conditions. This tool first needs to be field tested. Then the model needs to be re-trained to make it more robust.
			</p>
			
		
				
			
			
		
	</div>
	<!-- End of block -->
	
</div>





</div><!-- End of 960 width region -->

<footer id="footer">
		&copy; 2022, Inc. All rights reserved
		<div class="panel-inside">
			This web-app is a communication tool that provides initial comparative information about skin disease. This information comes from tested model using HAM10000 Dataset. Outcome of skin diagnose comparisons is only effective when discussed with a qualified health care provider. 
		</div>
	</footer>
	<!-- /#footer --> 



</div><!--END OF HOME PAGE TAB-->
</div> <!-- w3-content -->
</body>
</html>

