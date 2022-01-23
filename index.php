<!DOCTYPE html>
<html>
<head> 
	<!-- Defaults, CSS, JS main files -->
	<?php include('config.php'); ?>
	<title> Chicago Shufflers </title>
</head>
<body style = "overflow-y: hidden;">

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

			<!-- 
				==============================================
				=============== SHUFFLING ====================
				==============================================
			-->
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
						<!-- Description -->
						<p1> The complete embodiment of what it means to express all emotions through footwork and flow. </p1>

						<!-- Sears Tower Outline -->
						<div class = "building-container">
							<div class = "container-fader" id = "sears-tower-fader"></div>
							<div class = "sears-tower-attena-left"></div>
							<div class = "sears-tower-attena-right"></div>
							<div class = "sears-tower-top"></div>
							<div class = "sears-tower-bottom"></div>
						</div>

						<div class = "header-abs" id = "main-right-header"> SHUFFLING </div>
					</div>
				</div>
			</div>

			<div class = "homepage-slide">
				<div class = "left-right-container">
					<div class = "left-box">
						<!-- Aon Center Outline -->
						<div class = "building-container">
							<div class = "container-fader" id = "aon-center-fader"></div>
							<div class = "aon-center-outer"></div>
							<div class = "aon-center-line-1"></div>
							<div class = "aon-center-line-2"></div>
							<div class = "aon-center-line-3"></div>
							<div class = "aon-center-line-4"></div>
							<div class = "aon-center-line-5"></div>
						</div>
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
<script> auto_fill_rotate(); </script>
</html>