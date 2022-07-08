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

			<div class = "homepage-slide" style = "opacity: 1;">
				<!-- Message to appear at the start of the slide --> 

				<div class = "slide-message">
					<div class = "slide-text">
						<h1 id = "main-right-header"> CHICAGO SHUFFLERS </h1>
						<p1></p1>
					</div>
					<!--
					<div class = "header-abs" id = "main-right-header"><h1> SHUFFLING </h1></div>
					<div id = "shuffle-desc"><p1>The complete embodiment of what it means to express all emotions through footwork and flow. 
					</p1></div>
				-->
				</div>

				<div class = "mid-container" id = "first-mid">
					<video autoplay muted loop>
						<source src = "<?php echo $base;?>/videos/grant-park-recap_trim.mp4">
					</video>
				</div>
				<!--
				<div class = "left-right-container">
					<div class = "left-box">
						<!~~ Headers ~~> 
						<div class = "header-abs" id = "main-left-header"> CHICAGO </div>
					</div>

					<div class = "right-box">
						<!~~ Headers ~~>
						<div class = "header-abs" id = "main-right-header"> SHUFFLERS </div>
					</div>
				</div>

				<div class = "bottom-half">
					<!~~<img src = "<?php echo $base;?>/images/group/img-4.jpg">~~>
					<video autoplay muted loop>
						<source src = "<?php echo $base;?>/videos/grant-park-recap_trim.mp4">
					</video>
				</div>
			-->
				<!--
				<div class = "footer-outline">
					<img src = "<?php echo $base;?>/images/logos/chicago-outline-white.png">
				</div>
			-->
				
			</div>

			<!-- 
				==============================================
				=============== SHUFFLING ====================
				==============================================
			-->
			<div class = "homepage-slide">
				<!-- Message to appear at the start of the slide --> 

				<div class = "slide-message">
					<div class = "slide-text">
						<h1 id = "main-right-header"> SHUFFLING </h1>
						<p1> The complete embodiment of what it means to express all emotions through footwork and flow. </p1>
					</div>
					<!--
					<div class = "header-abs" id = "main-right-header"><h1> SHUFFLING </h1></div>
					<div id = "shuffle-desc"><p1>The complete embodiment of what it means to express all emotions through footwork and flow. 
					</p1></div>
				-->
				</div>

				<div class = "mid-container">
					<h1> CTLABS</h1>
					<video autoplay muted loop>
						<source src = "<?php echo $base;?>/videos/Ctalbs_shuffles.mov">
					</video>
				</div>
				<!--
				<div class = "left-right-container">
					<div class = "left-box">
						<video autoplay muted loop>
							<source src = "<?php echo $base;?>/videos/Ctalbs_shuffles.mov">
						</video>
					</div>

					<div class = "right-box">
						<!~~ Description ~~>
						

						<!~~ Sears Tower Outline ~~>
						<div class = "building-container-right">
							<div class = "building-box" id = "sears-tower-box">
								<div class = "container-fader" id = "sears-tower-fader"></div>
								<div class = "sears-tower-attena-left"></div>
								<div class = "sears-tower-attena-right"></div>
								<div class = "sears-tower-top"></div>
								<div class = "sears-tower-bottom"></div>
							</div>
						</div>
					</div>
				</div>
			-->
			</div>

			<div class = "homepage-slide">
				<div class = "slide-message">
					<div class = "slide-text">
						<h1 id = "main-right-header"> ABOUT US </h1>
						<p1> A community based organization with the passion for inclusivity of all dance styles. We represent the Chicagoland shuffling community and strive to advocate for the dance and our members. </p1>
					</div>
					<!--
					<div class = "header-abs" id = "main-right-header"><h1> SHUFFLING </h1></div>
					<div id = "shuffle-desc"><p1>The complete embodiment of what it means to express all emotions through footwork and flow. 
					</p1></div>
				-->
				</div>

				<div class = "mid-container">
					<img src = "<?php echo $base;?>/images/group/img-1.jpg">
				</div>
				<!--
				<div class = "left-right-container">
					<div class = "left-box">
						<!~~ Description ~~>
						<div id = "about-desc"><p1><a href = "<?php echo $base;?>/about-us.php">Get to know us!</a> We're open to all levels, all ages, and all forms of dance.</p1></div>

						<!~~ Aon Center Outline ~~>
						<div class = "building-container-left">
							<div class = "container-fader" id = "aon-center-fader"></div>
							<div class = "aon-center-outer"></div>
							<div class = "aon-center-line-1"></div>
							<div class = "aon-center-line-2"></div>
							<div class = "aon-center-line-3"></div>
							<div class = "aon-center-line-4"></div>
							<div class = "aon-center-line-5"></div>
						</div>
						<!~~ Headers ~~> 
						<div class = "header-abs" id = "main-left-header"> ABOUT US </div>
					</div>

					<div class = "right-box">
						<img src = "<?php echo $base;?>/images/group/img-1.jpg">
					</div>
				</div>
			-->
			</div>

			<div class = "homepage-slide">
				<div class = "slide-message">
					<div class = "slide-text">
						<h1 id = "main-right-header"> EVENTS </h1>
						<p1> We collab with local clubs, festivals, and DJs. We perform, have meetups, and classes to teach all levels! </p1>
					</div>
					<!--
					<div class = "header-abs" id = "main-right-header"><h1> SHUFFLING </h1></div>
					<div id = "shuffle-desc"><p1>The complete embodiment of what it means to express all emotions through footwork and flow. 
					</p1></div>
				-->
				</div>

				<div class = "mid-container">
					<img src = "<?php echo $base;?>/images/group/myhouse-1.jpg">
				</div>
				<!--
				<div class = "left-right-container">
					<div class = "left-box">
						<img src = "<?php echo $base;?>/images/group/myhouse-1.jpg">
					</div>

					<div class = "right-box">
						<div class = "header-abs" id = "main-right-header"> EVENTS </div>
					</div>
				</div>
			-->
			</div>

			<div class = "homepage-slide">
				<div class = "slide-message">
					<div class = "slide-text">
						<h1 id = "main-right-header"> MERCH </h1>
						<p1> Hats, Jerseys, Legging, and more! </p1>
					</div>
					<!--
					<div class = "header-abs" id = "main-right-header"><h1> SHUFFLING </h1></div>
					<div id = "shuffle-desc"><p1>The complete embodiment of what it means to express all emotions through footwork and flow. 
					</p1></div>
				-->
				</div>

				<div class = "mid-container">
					<img src = "<?php echo $base;?>/images/merch/img-1.jpg">
				</div>
				<!--
				<div class = "left-right-container">
					<div class = "left-box">
						<!~~ Headers ~~> 
						<div class = "header-abs" id = "main-left-header"> MERCH </div>
					</div>

					<div class = "right-box">
						<img src = "<?php echo $base;?>/images/merch/img-1.jpg">
					</div>
				</div>
			-->
			</div>

			<div class = "homepage-slide">
				<!-- Message to appear at the start of the slide --> 

				<div class = "slide-message">
					<div class = "slide-text">
						<h1 id = "main-right-header"> MEDIA </h1>
						<p1> Catch us on Instagram and Facebook! </p1>
					</div>
					<!--
					<div class = "header-abs" id = "main-right-header"><h1> SHUFFLING </h1></div>
					<div id = "shuffle-desc"><p1>The complete embodiment of what it means to express all emotions through footwork and flow. 
					</p1></div>
				-->
				</div>

				<div class = "mid-container">
					<video autoplay muted loop>
						<source src = "<?php echo $base;?>/videos/ezoo-1.mov">
					</video>
				</div>
				<!--
				<div class = "left-right-container">
					<div class = "left-box">
						<video autoplay muted loop>
							<source src = "<?php echo $base;?>/videos/ezoo-1.mov">
						</video>
					</div>

					<div class = "right-box">
						<div class = "header-abs" id = "main-right-header"> MEDIA </div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div> <!-- End of main container -->


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
<script type = "text/javascript" src = "<?php echo $base;?>/home.js?v=<?php echo $date;?>"></script>
<script> auto_fill_rotate(); </script>
</html>