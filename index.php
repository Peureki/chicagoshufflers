<!DOCTYPE html>
<html>
<head> 
	<!-- Defaults, CSS, JS main files -->
	<?php include('config.php'); ?>
	<title> Chicago Shufflers </title>
</head>
<body>

	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('nav.php'); ?>
	<!-- 
		===========================================================
		====================== MAIN BOXES =========================
		===========================================================
	-->

	<div id = "section-1" class = "main-box" style = "z-index: 100;">

		<div class = "main-video-block">
			<video controls autoplay muted>
				<source src = "./videos/grant-park-recap.mp4" type = "video/mp4">
			</video>
		</div>
	<!--
		<div class = "sears-tower-antenna-left">

		</div>

		<div class = "sears-tower-antenna-right">
		</div>

		<div class = "sears-tower-top">

		</div>
	-->


	</div>

	<div id = "section-2" class = "main-box">
		This is the next section
	</div>


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
</html>