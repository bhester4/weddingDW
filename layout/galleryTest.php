<html>
	<head>
		<title>Gallery Test</title>
		<link type="text/css" src="../css/jquery.galleryview-3.0-dev.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>		
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="../js/jquery.timers-1.2.js"></script>
		<script type="text/javascript" src="../js/jquery.galleryview-3.0-dev.js"></script>
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
		<script type="text/javascript">
			$('#Gatlinburg').galleryView();
		</script>
	</body>
</html>