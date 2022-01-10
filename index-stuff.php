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
			

			
			<!-- Split screen to half and half -->
			<div class = "left-right-container">
				<div class = "left-box">
					<!-- Headers --> 
					<div class = "title-abs" id = "about-1"> WHO </div>
					<div class = "title-abs" id = "about-2"> WE </div>
					<div class = "title-abs" id = "about-3"> ARE </div>
				</div>

				<div class = "right-box">  

					<div class = "about-fader-top" id = "about-fader-top"></div>
					<div class = "about-fader-mid" id = "about-fader-mid"></div>
					<div class = "about-fader-bot" id = "about-fader-bot"></div>

					<div class = "half-pic">
						<img id = "half-pic" src = "<?php echo $base;?>/images/group/pic-5.jpg">
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class = "main-box">
			<div class = "whole-container">
				<img src = "<?php echo $base;?>/images/group/pic-4.jpg">

				<div class = "half-container">
					<div class = "title-events">
						<h1 id = "event-name"> GRANT PARK MEETUP </h1>
						<p1 id = "event-date"> 5/2/21 </p1>
					</div>
					<div class = "pic-container">
						<img onclick = "rotate_star(this)" src = "<?php echo $base;?>/images/assets/star.svg">
					</div>
				</div>
			</div>
		</div>
		-->

		<div class = "main-box">
			<!-- Split screen to half and half -->
			<div class = "left-right-container">
				<div class = "left-box">

					<div class = "whole-fader" id = "whole-fader"></div>

					<div class = "quarter-pic">
						<img id = "event-img" src = "<?php echo $base;?>/images/group/pic-4.jpg">
					</div>	
				</div>

				<div class = "right-box">  

					<div class = "title-events">
						<h1 id = "event-name"> GRANT PARK MEETUP </h1>
						<p1 id = "event-date"> 5/2/21 </p1>
					</div>
					<div class = "pic-container">
						<img onclick = "rotate_star(this)" src = "<?php echo $base;?>/images/assets/star.svg">
					</div>
				</div>
			</div>
		</div>
	</div> <!-- End of main container -->


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
</html>