<html>
	<head>
		<title>Gallery Test</title>
		<!--<link type="text/css" src="../css/jquery.galleryview-3.0-dev.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="../js/jquery.timers-1.2.js"></script>
		<script type="text/javascript" src="../js/jquery.galleryview-3.0-dev.js"></script>
		<script>
			$(function(){
				$('#Gatlinburg').galleryView({
					panel_width: 800,
					panel_height: 600,
					frame_width: 120,
					frame_height: 90
				});
			});
		</script>-->
		
		<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		
		<!-- Second, add the Timer and Easing plugins -->
		<script type="text/javascript" src="../js/jquery.timers-1.2.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		
		<!-- Third, add the GalleryView Javascript and CSS files -->
		<script type="text/javascript" src="../js/jquery.galleryview-3.0-dev.js"></script>
		<link type="text/css" rel="stylesheet" href="../css/jquery.galleryview-3.0-dev.css" />
		
		<!-- Lastly, call the galleryView() function on your unordered list(s) -->
		<script type="text/javascript">
			$(function(){
				$('#Gatlinburg').galleryView();
			});
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
			
			echo $photoList;
		?>
		
		<!--
		<div class="gv_galleryWrap" style="width: 800px; height: 445px; padding: 5px; ">
			<div class="gv_gallery" style="width: 800px; height: 445px; ">
				<div class="gv_panelWrap" style="width: 800px; height: 400px; top: 0px; left: 0px; ">
					<div class="gv_panel" style="width: 800px; height: 400px; ">
						<img style="visibility: visible; width: 800px; height: 531.7171717171717px; top: -66px; left: 0px; " src="img/photos/bp1.jpg">
					</div>
					<div class="gv_panelNavNext" style="top: 190px; right: 10px; display: none; "></div>
					<div class="gv_panelNavPrev" style="top: 190px; left: 10px; display: none; "></div>
					<div class="gv_infobar" style="display: none; opacity: 1; ">1 of 13</div>
				</div>
				<div class="gv_filmstripWrap" style="width: 680px; height: 40px; bottom: 0px; left: 0px; ">
					<div class="gv_filmstrip" style="width: 3315px; height: 40px; left: -1105px; ">
						<div class="gv_frame" style="width: 80px; height: 40px; margin-right: 5px; margin-bottom: 5px; ">
							<div class="gv_thumbnail current" style="width: 80px; height: 40px; opacity: 1; ">
								<img style="visibility: visible; width: 80px; height: 53.17171717171718px; top: -7px; left: 0px;" src="img/photos/bp1.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="gv_navWrap" style="width: 70px; height: 30px; bottom: 5px; right: 0px; ">
					<div class="gv_navPrev" style=""></div>
					<div class="gv_navPlay" style=""></div>
					<div class="gv_navNext" style=""></div>
				</div>
			</div>
		</div>-->
	</body>
</html>