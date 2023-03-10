<!doctype html>
	
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

<!-- lets you use only unprefixed CSS properties  -->
<script  src="prefixfree/1-0-7/prefixfree.dynamic-dom.min.js"></script>
<!-- jQuery -->
<script src="ajax/libs/jquery/1-10-2/jquery.min.js"></script>
<script src="ajax/libs/jqueryui/1-8/jquery-ui.min.js"></script>
<script src="js/jsapi.js"></script>
<script  src="js/main.js"></script>

</head>
<body>
<div id="pagewrap" data-nav="home">
		<a id="site-logo" href="index.html" title="Home"></a>
	<header id="header">
		<div id="header-center">
			
			
			<nav>
				<ul id="main-nav">
					<li><a href="#skin" class="nav">Skin Diseases</a></li>
					<li><a href="#about" class="nav">How it works</a></li>
					<li><a href="#faqs" class="nav">FAQs</a></li>
					<li><a href="#contact" class="nav">Contact Us</a> </li>
					<li><a href="logout.php" class="nav">Logout</a></li>
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


<link rel="shortcut icon" type="image/png" href="logoSA.png">


<style>
html,body,h2,h3,h4,p,h5,li {font-family: Roboto, sans-serif}
</style>


</head>
<body class="bground-color">
<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content. -->
<div class="w3-content" style="max-width:960px">



<!-- 1. HOME PAGE 
<div class="tabbed w3-animate-opacity w3-teal" id="home">-->
	
	
<!-- Top Bar 
<div class='w3-center'>
	<p class="space-letters-large w3-small w3-tag bground-color w3-text-teal w3-border w3-round">
		<a class="change-size" href="logout.php"><b>Logout</b></a>-->
	<!--<p class="space-letters-large w3-small w3-tag bground-color w3-text-teal w3-border w3-round">
		<a class="change-size" href="faq.html"><b>About</b></a>-->

<!--</div>-->
<!-- Front page image -->
<!-- This image will be replaced once the js code runs. -->

<div class="w3-center w3-padding-bottom">
	<img id="selected-image" class="w3-round adjust-image" src="assets/skind.jpg" height="250" alt="Image for analysis"> 
</div> 
<!-- Button -->
				
	<div id="btnn" class="w3-center">
	<button class="w3-btn w3-deep-black w3-hover-blue w3-round w3-margin-bottom adjust-spacing btn-font w3-padding w3-space-letters w3-text-white" onclick="setTimeout(simulateClick.bind(null, 'image-selector'), 200)"><i class='fas fa-camera w3-padding-center' style='font-size:15px'></i>
		<b>Select Skin Disease to Analyze</b></button></div>
		<div id="btnn" class="w3-center">
	<p class="w3-round w3-margin-bottom adjust-spacing w3-space-letters w3-text-white">Please select .jpeg or .png file</p>

</div>


<div class="w3-center">
	<div  class="progress-bar w3-text-white space-letters">
	<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
	<p>Model is loading...</p></div>
</div>

<!-- Progress Bar 
Just here for graphics.
The functionality was not implemented because it slows down the model download 
and causes it to fail.-->
<div class="w3-light-grey side-margin w3-opacity">
<div  id="myBar" class="w3-container w3-black" style="height:5px;width:100%"></div>
</div>


<!-- Results Box -->

<div class="w3-center w3-border add-margin w3-round space-letters bottom-margin dont-break-out">

	<p id="ress">RESULTS</p>
	
	
	<ol class='w3-left-align text-color' id='prediction-list'></ol>
		<a href="#skin">Click here for Diagnosis</a>
</div>
 </div>




<!-- Bottom Bar 
<div class='w3-center w3-padding-bottom'>
	<p class="space-letters">
		<a class="w3-small w3-hover-text-deep-orange text-color" href="index.html">
		<b>Skin Disease Analyzer</b></a>
	</p>
</div>


</div>--><!--END OF HOME PAGE-->



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

		<div id="panel4" data-nav="skin">
			<h3 class="center-title w3-text-pink" >Skin Disease</h3>
			<div class="panel-inside">
				<img id="panel4-sq1" src="images/database.png" class="panel-img"  alt="skin disease"/>
				<div id="panel4-sq2">
<p align ="justify">nv<br>
<span class="w3-text-teal">Melanocytic nevi are benign neoplasms of melanocytes and appear in a myriad of variants, which all are included in our series. The variants may differ significantly from a dermatoscopic point of view.</span></p>

<p align ="justify">mel<br>
<span class="w3-text-teal">Melanoma is a malignant neoplasm derived from melanocytes that may appear in different variants. If excised in an early stage it can be cured by simple surgical excision. Melanomas can be invasive or non-invasive (in situ). We included all variants of melanoma including melanoma in situ, but did exclude non-pigmented, subungual, ocular or mucosal melanoma.</span></p>

<p align ="justify">bkl<br>
<span class="w3-text-teal">"Benign keratosis" is a generic class that includes seborrheic ker- atoses ("senile wart"), solar lentigo - which can be regarded a flat variant of seborrheic keratosis - and lichen-planus like keratoses (LPLK), which corresponds to a seborrheic keratosis or a solar lentigo with inflammation and regression. The three subgroups may look different dermatoscop- ically, but we grouped them together because they are similar biologically and often reported under the same generic term histopathologically. From a dermatoscopic view, lichen planus-like keratoses are especially challeng- ing because they can show morphologic features mimicking melanoma [23] and are often biopsied or excised for diagnostic reasons.</span></p>

<p align ="justify">bcc<br>
<span class="w3-text-teal">Basal cell carcinoma is a common variant of epithelial skin cancer that rarely metastasizes but grows destructively if untreated. It appears in different morphologic variants (flat, nodular, pigmented, cystic, etc), which are all included in this set.</span></p>

<p align ="justify">akiec<br>
<span class="w3-text-teal">Actinic Keratoses (Solar Keratoses) and intraepithelial Carcinoma (Bowen???s disease) are common non-invasive, variants of squamous cell car- cinoma that can be treated locally without surgery. Some authors regard them as precursors of squamous cell carcinomas and not as actual carci- nomas. There is, however, agreement that these lesions may progress to invasive squamous cell carcinoma - which is usually not pigmented. Both neoplasms commonly show surface scaling and commonly are devoid of pigment. Actinic keratoses are more common on the face and Bowen???s disease is more common on other body sites. Because both types are in- duced by UV-light the surrounding skin is usually typified by severe sun damaged except in cases of Bowen???s disease that are caused by human papilloma virus infection and not by UV. Pigmented variants exists for Bowen???s disease and for actinic keratoses. Both are included in this set.</span></p>

<p align ="justify">vasc<br>
<span class="w3-text-teal">Vascular lesions are relatively common abnormalities of the skin and underlying tissues, more commonly known as birthmarks. There are three major categories of vascular lesions: Hemangiomas, Vascular Malformations, and Pyogenic Granulomas. While these birthmarks can look similar at times, they each vary in terms of origin and necessary treatment.Vascular skin lesions in the dataset range from cherry angiomas to angiokeratomas and pyogenic granulomas. Hemorrhage is also included in this category.</span></p>

<p align ="justify">df<br>
<span class="w3-text-teal">
	Dermatofibroma is a benign skin lesion regarded as either a benign proliferation or an inflammatory reaction to minimal trauma. It is brown often showing a central zone of fibrosis dermatoscopically.<br>
A dermatofibroma is a common benign fibrous nodule usually found on the skin of the lower legs.

<br>A dermatofibroma is also called a cutaneous fibrous histiocytoma.
<br>Who gets a dermatofibroma?
<br>Dermatofibromas are mostly seen in adults. People of every ethnicity can develop dermatofibromas. Ordinary dermatofibromas are more common in women than in men, although some histologic variants are more commonly identified in males.</span></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<a class="pic-icon down2 nav" href="#about"></a>
		</div>

<div id="panel3" data-nav="about">
			<h3 class="center-title">How it works?</h3>
			<div class="panel-inside">
				<div id="panel3-sq1">
					<div id="sq3-text">
						<p class='w3-text-pink topp-margin'><b>Image format</b></p>
			
			<p align = "justify">The app accepts images in .jpg or .png format.</p>
			
			

			
			<p class='w3-text-pink topp-margin'><b>Limitations</b></p>
			
			<p align = "justify">The Ai brain (model) that powers this app is not skilled enough to consistently assign the highest score to the correct disease. Also, the model is not very good at detecting melanoma. That said, during testing the correct skin disease was regularly among the top three predicted disease.</p>
			
			<p align = "justify">The model was not trained using photos that were taken with a mobile phone. Therefore, the model's prediction accuracy could be affected by variations in the quality of mobile phone images.</p>
			
			
			<hr>
					</div>
				</div>
				<img id="panel3-sq2" src="images/algorithm.png" class="panel-img" alt="Skin Disease Algorithm"/>
				<div class="clearfix"></div>
			</div>
			<a class="pic-icon down1 nav" href="#faqs"></a>
		</div>

	<div id="panel8" data-nav="faqs">
			<h3 class="center-title">FAQs</h3>
			<div class="panel-inside">
		
			<p class='w3-text-black topp-margin'><b>Will I need to wait for the model to download every time I use the web-app?</b></p>
			
			<p>No. Once the model downloads it will be cached in memory. The next time you visit this site you won???t need to wait.</p>
			<!--
			<p>That said, I suggest that you always use this tool with your web browser set to incognito mode. The model won???t be saved, but this will ensure that each time you visit this site you will always use the most up to date version of the model and not the old one that's stored in your device's memory.
			</p>
			-->
			
			
			<p class='w3-text-black topp-margin'><b>What about patient data privacy?</b></p>
			
			<p align ="justify">Your images are never sent to an external server. Any image you submit stays on your computer or mobile phone. This is because the model is running on your device. This is also why a batch of images can be analyzed in less than two seconds.</p>
			
			<p>The tech that makes this possible is called Tensorflow.js. It was created by Google.</p>
			
			
			
			
			
			
			<p class='w3-text-black topp-margin'><b>What do the decimal numbers mean?</b></p>
			
			<p align ="justify">They are probability scores between 0 and 1. They show how confident the model is that a particular condition is present on the image. <br>
				For example, <i>mel, Melanoma: 0.231</i> means that the model is 23% sure that the skin disease shown in the image is melanoma.</p>
			
			
			
			
			
			
			<p class='w3-text-black topp-margin'><b>How do I use this app on a computer?
			</b></p>
			
			<p>- Go to this site on your computer.<br>
				- Login an account. (If don't have an existing account, you can signup) <br>
				
			- Click the black button.<br>
			- Select one image and click ???Open???.<br>
			- The app will print results for each image.
			</p>
			
			
			
			<!--
			
			<p class='w3-text-black topp-margin'><b>How do I use this app on a mobile phone?
			</b></p>
			
			<p>You can submit photos that are stored on your phone. The steps below apply to Android. iOS may be similar but I'm not sure.</p>
			
			
			<p class="w3-text-black"><b> Use images from your photo folder</b></p>
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
		-->
			
		
			
			<div class="clearfix"></div>
			<a class=" pic-icon down1 nav" href="#contact"></a>
		</div>
		</div>
		<div id="panel7" data-nav="contact">
			<h3 class="center-title">Contact Us</h3>
			<div class="panel-inside">
				<div id="sq1">
					<h4>CONTACT US</h4>
					<div class="panel7-adr">University of Makati<br/>
						+91 123456789<br/>
						landz.pogi@gmail.com<br/>
					</div>
				</div>
				<div id="sq2">
					<h4>Comments and Concerns</h4>
					<div id="signup_form">
				<form name="contact-form" action="" method="post" id="contact-form">
				<input type="text" class="form-control" name="your_name" placeholder="Name" required>
				<input type="text" class="form-control" name="your_email" placeholder="Email" required>
				<input type="text" class="form-control" name="your_phone" placeholder="Phone" required>
				<textarea name="comments" class="form-control" rows="3" cols="51" rows="5" placeholder="Comments"></textarea> 
				</div>
				<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
					</form>
				
					</div>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_email']").val() === '')
{
$("#contact-form [name='your_email']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}
});
}
});
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>
				<div class="clearfix"></div>
				<a class="pic-icon home nav" href="#home"></a>
			</div>
		</div>
		
<footer id="footer">
		&copy; 2022, Inc. All rights reserved
		<div class="panel-inside">
			This web-app is a communication tool that provides initial comparative information about skin disease. This information comes from tested model using HAM10000 Dataset. Outcome of skin diagnose comparisons is only effective when discussed with a qualified health care provider. 
		</div>
	</footer>

	<!-- /#footer --> 
</body>
</html>

