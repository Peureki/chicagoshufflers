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


	<div class = "main-container">
		<div class = "center-desc">
			<!--
			<p1> Shuffling is a dance that revovles around the Running Man and the T-Step. It can be described as an umbrella term as there can be many different variations of the Running Man and T-Step. There are an abundant amount of different shuffling styles based on the individual or region throughout the world.   </p1>

		-->
			<p1 id = "shuffle-para"></p1>
		</div>

		<!-- FOR TSTEP TEXT -->
		<video class = "video-tooltip" id = "shuffle-t-step-video" autoplay muted loop>
			<source src = "<?php echo $base;?>/videos/mama-ezoo.mp4">
		</video>

		<!-- FOR RUNNING MAN TEXT -->
		<video class = "video-tooltip" id = "shuffle-running-man-video" autoplay muted loop>
			<source src = "<?php echo $base;?>/videos/running-man.mp4">
		</video>

		<div class = "desc-tooltip" id = "umbrella-words">
			<h1> Melbourne Shuffle </h1>
			<h1> California Style </h1>
			<h1> Malaysia Style </h1>
			<h1> Cutting Shapes </h1>
			<h1> Etc </h1>
		</div>
	</div>

	<div class = "main-container" id = "shuffle-headers">
		<div class = "main-header-block">
			<h1>BUILD</h1>
		</div>

		<div class = "main-header-block">
			<h1>YOUR</h1>
		</div>

		<div class = "main-header-block">
			<h1  style = "flex-wrap: nowrap;">FOUNDATION</h1>
		</div>
		
	</div>

	
	<!--
	<div class = "main-container">
		<div class = "half-container">
			<div class = "one-half-container">
				<div class = "sub-header">
					<h1> History </h1>
				</div>

				<div class = "general-desc">
					<p1> In general, the movement of shuffling has been around for decades. The style can be seen as early by black Americans in the 1920s known as the "Charleston". In 1980, shuffling became popular in the underground rave scene in Melbourne known today as the Melbourne Shuffle with the Running Man becoming as the signiture move. </p1>
				</div>
			</div>


			<div class = "one-half-container">
				<div class = "img-cover">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/group/shufflepalooza-2.jpg">
				</div>
			</div>
		</div>
	</div>

	<div class = "main-container">
		<div class = "half-container">
			<div class = "one-half-container">
				<div class = "img-cover">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/group/shufflepalooza-2.jpg">
				</div>
			</div>


			<div class = "one-half-container">
				<div class = "sub-header">
					<h1> Chicago </h1>
				</div>

				<div class = "general-desc">
					<p1> In general, the movement of shuffling has been around for decades. The style can be seen as early by black Americans in the 1920s known as the "Charleston". In 1980, shuffling became popular in the underground rave scene in Melbourne known today as the Melbourne Shuffle with the Running Man becoming as the signiture move. </p1>
				</div>
			</div>
		</div>
	</div>
-->

	<div class = "main-container">
		<div class = "grid-two-col">
			<div class = "grid-two-col-section"> 
				<img src = "<?php echo $base;?>/images/assets/running-man-1.svg">
			</div>
			<div class = "grid-two-col-section"> 
				<h1> 01 </h1>
				<p1>Start with your feet apart from each other, one in the back and one in the front. Your lower body should form a triangle shape.</p1>
			</div>
		</div>

		<div class = "grid-two-col">
			<div class = "grid-two-col-section"> 
				<img src = "<?php echo $base;?>/images/assets/running-man-2.svg">
			</div>
			<div class = "grid-two-col-section"> 
				<h1> 02 </h1>
				<p1>Both feet should meet at the middle. Slide your front foot to the middle to be your center of gravity while lifting your back foot above the middle.</p1>
			</div>
		</div>

		<div class = "grid-two-col">
			<div class = "grid-two-col-section"> 
				<img src = "<?php echo $base;?>/images/assets/running-man-1.svg">
			</div>
			<div class = "grid-two-col-section"> 
				<h1> 03 </h1>
				<p1>Stomp the ground with your lifted foot forward and slide your other foot back. You should form the same position as step 1. Rinse and repeat!</p1>
			</div>
		</div>
	</div>

	<div class = "main-container">
		<div class = "center-desc">
			<p1> This is the most simple example of the Running Man. Even the most experienced shufflers practice the basics! The more you practice the fundementals, the more you will evolve your style. Learn more through our classes, events, or social media. </p1>
		</div>
	</div>


	<?php include("footer.php"); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
<script type = "text/javascript" src = "<?php echo $base;?>/shuffling.js?v=<?php echo $date;?>"></script>
</html>