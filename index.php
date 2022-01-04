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
	<div id = "main-container" class = "main-container">

		<div id = "section-1" class = "main-box" style = "z-index: 100;">

			<div class = "main-video-block">
				<video controls autoplay muted>
					<source src = "<?php echo $base;?>/videos/grant-park-recap.mp4" type = "video/mp4">
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
		<!--
			<div class = "title-bottom">
				CHICAGO | SHUFFLE | HOUSE | TECHNO | FLOW | EXPRESS
			</div>
		-->

		</div>

		<!-- 
			===========================================================
			====================== ABOUT US ===========================
			===========================================================
		-->

		<div id = "section-2" class = "main-box">
			<!-- Headers --> 
			<div class = "title-abs" id = "about-1"> WHO </div>
			<div class = "title-abs" id = "about-2"> WE </div>
			<div class = "title-abs" id = "about-3"> ARE </div>

			

			<div class = "left-right-container">
				<div class = "left-box">
					This is the left box
				</div>

				<div class = "right-box">
					<div class = "about-pic">
						<img id = "about-pic-1" src = "<?php echo $base;?>/images/group/pic-1.jpg">
					</div>

					<div id = "about-desc-1" class = "small-description">
						<p1> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p1>
					</div>
				</div>
			</div>
		</div>

		<div class = "main-box">
			SECTION 3
		</div>
	</div> <!-- End of container -->


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
</html>