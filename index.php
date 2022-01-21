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
		<div class = "progress-bar">
			<div class = "fill-bar" id = "fill-rotate">
			</div>
		</div>

		<div class = "progress-bar">
			<div class = "fill-bar" id = "fill-slides">
			</div>
		</div>
		

		<div class = "main-box">
			<div class = "mid-box">
				<img id = "star-img" onclick = "rotate_star(this)" src = "<?php echo $base;?>/images/assets/star.svg">
			</div>

			<div class = "homepage-slide">
				<div class = "left-right-container">
					<div class = "left-box">
						<!-- Headers --> 
						<div class = "header-abs" id = "main-left-header"> CHICAGO </div>
					</div>

					<div class = "right-box">
						<!-- Headers -->
						<div class = "header-abs" id = "main-right-header"> SHUFFLERS </div>
					</div>
				</div>

				<div class = "bottom-half">
					<!--<img src = "<?php echo $base;?>/images/group/img-4.jpg">-->
					<video autoplay muted loop>
						<source src = "<?php echo $base;?>/videos/grant-park-recap_trim.mp4">
					</video>
				</div>
			</div>

			<div class = "homepage-slide">
				<div class = "left-right-container">
					<div class = "left-box">
						<video autoplay muted loop>
							<source src = "<?php echo $base;?>/videos/Ctalbs_shuffles.mov">
						</video>
						<!-- Headers --> 
						<div class = "header-abs" id = "main-left-header"> </div>
					</div>

					<div class = "right-box">
						<p1> Shuffling is the flow and the movement with one's footwork and the motion of their body. </p1>
						<div class = "header-abs" id = "main-right-header"> SHUFFLING </div>
					</div>
				</div>
			</div>

			<div class = "homepage-slide">
				<div class = "left-right-container">
					<div class = "left-box">
						<!-- Headers --> 
						<div class = "header-abs" id = "main-left-header"> ABOUT US </div>
					</div>

					<div class = "right-box">
						<img src = "<?php echo $base;?>/images/group/img-1.jpg">
						<div class = "header-abs" id = "main-right-header"> </div>
					</div>
				</div>
			</div>

			<div class = "homepage-slide">
				<div class = "left-right-container">
					<div class = "left-box">
						<img src = "<?php echo $base;?>/images/group/myhouse-1.jpg">
						<!-- Headers --> 
						<div class = "header-abs" id = "main-left-header"> </div>
					</div>

					<div class = "right-box">
						<div class = "header-abs" id = "main-right-header"> EVENTS </div>
					</div>
				</div>
			</div>

			<div class = "homepage-slide">
				<div class = "left-right-container">
					<div class = "left-box">
						<!-- Headers --> 
						<div class = "header-abs" id = "main-left-header"> MERCH </div>
					</div>

					<div class = "right-box">
						<img src = "<?php echo $base;?>/images/merch/img-1.jpg">
						<!-- Headers -->
						<div class = "header-abs" id = "main-right-header"> </div>
					</div>
				</div>
			</div>

			<div class = "homepage-slide">
				<div class = "left-right-container">
					<div class = "left-box">
						<video autoplay muted loop>
							<source src = "<?php echo $base;?>/videos/ezoo-1.mov">
						</video>
						<!-- Headers --> 
						<div class = "header-abs" id = "main-left-header"> </div>
					</div>

					<div class = "right-box">
						<div class = "header-abs" id = "main-right-header"> SOCIAL </div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- End of main container -->


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
</html>