<html>
	<head>
		<title>Gallery Test</title>
		
		<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		
		<!-- Second, add the Timer and Easing plugins -->
		<script type="text/javascript" src="../js/jquery.timers-1.2.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="../js/jquery.batchImageLoad.js"></script>
		
		<!-- Third, add the GalleryView Javascript and CSS files -->
		<script type="text/javascript" src="../js/jquery.galleryview-3.0-dev.js"></script>
		<link type="text/css" rel="stylesheet" href="../css/jquery.galleryview-3.0-dev.css" />
		
		<!-- Lastly, call the galleryView() function on your unordered list(s) -->
		<script type="text/javascript">
			//function loadImages() {	
			$(function(){
				// IMPORTANT: This is how you use the plugin. Apply it on a
				// list of img tags and provide callback function.
				$('#Gatlinburg').find('img').batchImageLoad({
					loadingCompleteCallback: function(){
						$('#Gatlinburg').galleryView({
							transition_interval: 3000,
							panel_width: 600,
							panel_height: 450,
							panel_animation: 'crossfade',
							panel_scale: 'fit',
							show_filmstrip: false,
							autoplay: true,
							show_infobar: false
						});						
					}
					//If you want to do something when EACH image is loaded, replace "imageLoaded" with your function name.
					//Don't change "imageLoadedCallback"
					//imageLoadedCallback: imageLoaded
				});
			});
			/*
			$(function(){
				$('#Gatlinburg').galleryView({
					transition_speed: 600,
					panel_animation: 'slide'
				});
			});*/
		</script>


	</head>
	<body>
		<?php 
			$photoList = "";
			$photoList .= "<ul id='Gatlinburg'>";
			for($i=1; $i<=50; $i++) {
				$photoList .= "<li><img src='../images/Gatlinburg Meg and Ben/Gat-Meg-Ben-" . $i . ".jpg' /></li>";
			}
			$photoList .= "</ul>";
		?>
		<h1>Photo Gallery Test</h1>
		<h3>Meg and Ben in Gatlinburg</h3>
		<?php
			echo $photoList;
		?>
	</body>
</html>