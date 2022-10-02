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
		============================================================
		====================== LANDING BOX =========================
		============================================================
	-->
	<div class = "main-container" style = "height: 150vh;" id = "first-container">
		<div class = "first-fixed-container" id = "first-logo">
			<div class = "first-logo">
				<img src = "<?php echo $base;?>/images/logos/Logo_White.png">
			</div>

			<div class = "first-list-container" id = "first-list-container">
				<ul>
					<li><a href = "<?php echo $base;?>/shuffling.php">Shuffling</a></li>
					<li><a href = "<?php echo $base;?>/about.php">About</a></li>
					<li><a href = "<?php echo $base;?>/events-and-classes.php">Events</a></li>
					<li><a href = "<?php echo $base;?>/events-and-classes.php">Classes</a></li>
					<li><a href = "https://shop.sadboitees.com/chicago_shufflers/shop/home" target = "_blank">Merch</a></li>
				</ul>
			</div>

			<div class = "first-nav-social">
				<ul>
					<li><a href = "https://www.instagram.com/chicagoshufflers/" target = "_blank" title = "Instagram @chicagoshufflers"><img src = "<?php echo $base;?>/images/assets/instagram.svg"></a></li>
					<li><a href = "https://www.facebook.com/chicagoshufflers" target = "_blank" title = "Facebook @chicagoshufflers"><img src = "<?php echo $base;?>/images/assets/facebook.svg"></a></li>
					<li><a href = "https://www.youtube.com/channel/UCrudQ_ci6tFss6W0aVtFHWw" title = "Youtube @chi shufflers"><img src = "<?php echo $base;?>/images/assets/youtube.svg"></a></li>
					<li><a href = "mailto: chishufflers@gmail.com" title = "Gmail: chishufflers@gmail.com"><img src = "<?php echo $base;?>/images/assets/mail.svg"></a></li>
					<li><a href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fopen.spotify.com%2Fuser%2F31wctfdvuehypo3jewakiiz55ife%3Fsi%3D71e9aa49a7c14bc9%26fbclid%3DIwAR3aRnEcxvq4OKP6e-zaqwIE36rtfg4cT9hRUAOzeUKkMgYrQsGRMAXkdpE&h=AT3rFsUKNftcsiX01YI_SK8TyITwDFjcADaiM6ZGaXhewu-2bLdeCjQDVnQICczYLNCrPTkBKeScj83x12uWD00GTxuPUR8VIgykr1eeuYL7V_yOOeNhHsr3bpaHLBqjQRM3gY_dtzifExYbQ4w" target = "_blank" title = "Spotify Playlists"><img src = "<?php echo $base;?>/images/assets/spotify.svg"></a></li>
				</ul>

				<button type = "text" class = "contact-button">Contact Us</button>
			</div>
		</div>

		<div class = "first-collage-container">
			<div class = "first-collage-img" id = "first-collage-img-1">
				<div class = "collage-fader"></div>
				<img src = "<?php echo $base;?>/images/group/img-9.jpg">
			</div>

			<div class = "first-collage-img" id = "first-collage-img-2">
				<div class = "collage-fader"></div>
				<img src = "<?php echo $base;?>/images/group/img-6.jpg">
			</div>

			<div class = "first-collage-img" id = "first-collage-img-3">
				<div class = "collage-fader"></div>
				<img src = "<?php echo $base;?>/images/group/img-7.jpg">
			</div>
		</div>


		
	</div>
	<!-- 
		=============================================================
		====================== MAIN HERO VIDEO ======================
		=============================================================
		-->

	<div class = "main-container" style = "height: 120vh;" id = "main-hero-container">
		<!--
		<video class = "main-video" id = "main-hero-video" autoplay muted loop>
			<source src = "<?php echo $base;?>/videos/grant-park-recap_trim.mp4">
		</video>
		-->

		<video class = "main-video" id = "main-hero-video" autoplay muted loop>
			<source src = "<?php echo $base;?>/videos/grant-park-recap.mp4">
		</video>

		<div class = "sound-tooltip" id = "main-hero-video-tooltip">
			<p1> Listen in! </p1>
		</div>


	</div> <!-- End of main container -->

	<!-- 
		===========================================================
		====================== ABOUT US ===========================
		===========================================================
	-->

	<div class = "main-container" id = "main-about-us">

		<div class = "main-header" id = "about-section">
			<!--<h1 id = "about-header"> 
				<span>W</span>
				<span>H</span>
				<span>O</span>
				<span style = "padding-left: 20px; padding-right: 20px;"> </span>
				<span>W</span>
				<span>E</span>
				<span style = "padding-left: 20px; padding-right: 20px;"> </span>
				<span>A</span>
				<span>R</span>
				<span>E</span>
			 </h1>-->
			 <h1 id = "about-header">WE ARE</h1>
		</div>
		<!--
		<div class =  "marquee-container">
			<div class = "marquee"> 
				<div class = "marquee-inner" id = "home-about-marquee"> 
					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>
				</div>
			</div>
		</div>

	-->

		<div class =  "marquee-container">
			<div class = "marquee" id = "marquee-from-right-20"> 
				<div class = "marquee-inner-from-right" id = "home-about-marquee"> 
					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>
				</div>
			</div>

			<div class = "marquee" id = "marquee-from-left-30"> 
				<div class = "marquee-inner-from-left" id = "home-about-marquee"> 
					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>
				</div>
			</div>

			<div class = "marquee" id = "marquee-from-right-40"> 
				<div class = "marquee-inner-from-right" id = "home-about-marquee"> 
					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>
				</div>
			</div>

			<div class = "marquee" id = "marquee-from-left-60"> 
				<div class = "marquee-inner-from-left" id = "home-about-marquee"> 
					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>
				</div>
			</div>

			<div class = "marquee" id = "marquee-from-right-70"> 
				<div class = "marquee-inner-from-right" id = "home-about-marquee"> 
					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>
				</div>
			</div>
			<div class = "marquee" id = "marquee-from-left-80"> 
				<div class = "marquee-inner-from-left" id = "home-about-marquee"> 
					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>

					<span> Community </span>
					<span> Inclusive </span>
					<span> Family </span>
					<span> Diverse </span>
					<span> Eclectic </span>
					<span> Supportive </span>
				</div>
			</div>
		</div>
	</div>

	<div class = "main-space-container">

	</div>

	<!-- 
		=============================================================
		====================== SHUFFLING ============================
		=============================================================
	-->

	<div class = "main-container" style = "height: 150vh;" id = "main-shuffle-container">

		<div class = "main-header" id = "shuffle-section">
			<h1 id = "shuffle-header">SHUFFLING</h1>
		</div>

		<video class = "main-video" id = "main-shuffle-video" autoplay muted loop>
			<source src = "<?php echo $base;?>/videos/Ctalbs_shuffles_Trim.mp4">
		</video>
		<
		<div class = "general-desc" id = "shuffle-desc" style = "text-align: center;">
			<p1>Shuffling is the complete embodiment of what it means to express all emotions through footwork and flow.</p1>
		</div>

		<div class = "sound-tooltip" id = "main-shuffling-video-tooltip">
			<p1> Listen in! </p1>
		</div>
		
	</div>
	

	<!-- 
		===========================================================
		====================== CLASSES ============================
		===========================================================
	-->
	<div class = "main-container" style = "height: auto" id = "main-class-container">

		<div class = "main-header-block" id = "class-section">
			<h1 id = "class-header"> LEARN WITH US</h1>
		</div>

		<div class = "class-desc-container">
			<div class = "class-desc">
				<img class = "class-desc-img" src = "<?php echo $base;?>/images/assets/star.svg">
				<p1> All styles </p1>
			</div>

			<div class = "class-desc">
				<img class = "class-desc-img" src = "<?php echo $base;?>/images/assets/star.svg">
				<p1> All levels </p1>
			</div>

			<div class = "class-desc">
				<img class = "class-desc-img" src = "<?php echo $base;?>/images/assets/star.svg">
				<p1> All ages </p1>
			</div>

			<div class = "class-desc">
				<img class = "class-desc-img" src = "<?php echo $base;?>/images/assets/star.svg">
				<p1> All welcomed </p1>
			</div>
		</div>
		
		<div class = "general-desc" style = "padding-top:50px; padding-bottom:50px; text-align: center;">
			<p1>Learn through our classes.</p1>
		</div>
		

		<div class = "marquee" id = "marquee-classes"> 
			<div class = "marquee-inner-from-right"> 
				<img src = "<?php echo $base;?>/images/posters/classes/cece-2-6.jpeg">
				<img src = "<?php echo $base;?>/images/posters/classes/chelsee-7-10.JPG">
				<img src = "<?php echo $base;?>/images/posters/classes/ciara-7-14-22.jpg">
				<img src = "<?php echo $base;?>/images/posters/classes/saint-3-14.jpeg">

				<img src = "<?php echo $base;?>/images/posters/classes/cece-2-6.jpeg">
				<img src = "<?php echo $base;?>/images/posters/classes/chelsee-7-10.JPG">
				<img src = "<?php echo $base;?>/images/posters/classes/ciara-7-14-22.jpg">
				<img src = "<?php echo $base;?>/images/posters/classes/saint-3-14.jpeg">

				<img src = "<?php echo $base;?>/images/posters/classes/cece-2-6.jpeg">
				<img src = "<?php echo $base;?>/images/posters/classes/chelsee-7-10.JPG">
				<img src = "<?php echo $base;?>/images/posters/classes/ciara-7-14-22.jpg">
				<img src = "<?php echo $base;?>/images/posters/classes/saint-3-14.jpeg">

				<img src = "<?php echo $base;?>/images/posters/classes/cece-2-6.jpeg">
				<img src = "<?php echo $base;?>/images/posters/classes/chelsee-7-10.JPG">
				<img src = "<?php echo $base;?>/images/posters/classes/ciara-7-14-22.jpg">
				<img src = "<?php echo $base;?>/images/posters/classes/saint-3-14.jpeg">
			</div>
		</div>

		<!--
		<svg id = "svg-star-box" fill="none" viewBox="0 0 129 144" style = "border: 1px solid white">
			<g style = "transform: translate(-50%, -50%);">
				<path
		       style="fill:none;fill-opacity:1;stroke:#fe0100;stroke-width:2;"
		       d="m 118.65217,54.629277 13.15469,39.787615 41.02561,-8.543965 -27.87974,31.286103 27.91209,31.25724 -41.03443,-8.50151 -13.11351,39.8012 -13.15469,-39.78762 -41.025612,8.54397 27.879741,-31.2861 -27.912096,-31.257244 41.034427,8.501515 13.11352,-39.801204"
		       id="svg-star" pathLength = "1" />
		   </g>
		</svg>
		-->
		<!--
		<div class = "general-desc" id = "class-desc">
			<p1> Learn through our <span class = "red-text"><a href = "<?php echo $base;?>/classes.php">classes</a></span>.
			<br>All levels. 
			<br>All styles. 
			<br>All are welcomed.
			</p1>
		</div>
		-->
		
	</div>

	<!--
	<div class = "main-container">

		<div class = "home-events">
			<div class = "inner-event">
				<h1> Grant Park Meetup  </h1>
				<h2> 5/2/21 </h2>
				<div class = inner-event-img>
					<img src = "<?php echo $base;?>/images/group/img-4.jpg">
				</div>
			</div>

			<div class = "home-events-number">
				<div>
					<h1> 1 </h1>
				</div>
				<div class = "home-events-desc">
					<p1> Largest shuffle meetup in the midwest & Chicago </p1>
				</div>
			</div>
		</div>

	</div>

	<div class = "main-container">

		<div class = "home-events">
			<div class = "inner-event">
				<h1> Shufflepalooza  </h1>
				<img src = "<?php echo $base;?>/images/group/shufflepalooza-1.jpg">
			</div>

			<div class = "home-events-number">
				<h1> 2 </h1>
			</div>
		</div>
	</div>
-->

	<!-- 
		==========================================================
		====================== EVENTS ============================
		==========================================================
	-->

	<div class = "main-event-container">

		<div class = "main-header-block" id = "event-section">
			<h1 id = "event-header">VIBE WITH US</h1>
		</div>

		<!--
		<div class = "general-desc"> Drag → for more </div>
		-->
		<!-- 
			TIMELINE GRID FOR EVENTS 
		-->
		<!--
		<div class = "timeline-grid-container">
			<div class = "timeline-section">
				<h1> Grant Park Meetup </h1>
				<h2> 05/02/21 </h2>
				<div class = "timeline-line-section"> </div>
			</div>

			<div class = "timeline-section">
				<h1> Shufflepalooza </h1>
				<h2> 7/24/21 </h2>
				<div class = "timeline-line-section"> </div>
			</div>

			<div class = "timeline-section">
				<h1> MyHouse Performance </h1>
				<h2> 8/28/21 </h2>
				<div class = "timeline-line-section"> </div>
			</div>

			<div class = "timeline-section">
				<div class = "timeline-line"> </div>
			</div>
		</div>


		<div class = "timeline-event-container">
			<div class = "timeline-event-section">
				<div class = "timeline-event-img-container">
					<img src = "<?php echo $base;?>/images/group/img-4.jpg">
				</div>
				<div class = "timeline-event-desc">
					<p1> Description about the Grant Park Meetup event </p1>
				</div>
			</div>

			<div class = "timeline-event-section">
				<div class = "timeline-event-img-container">
					<img src = "<?php echo $base;?>/images/group/shufflepalooza-1.jpg">
				</div>
				<div class = "timeline-event-desc">
					<p1> Description about the Shufflepalooza event </p1>
				</div>
			</div>

			<div class = "timeline-event-section">
				<div class = "timeline-event-img-container">
					<img src = "<?php echo $base;?>/images/group/myhouse-1.jpg">
				</div>
				<div class = "timeline-event-desc">
					<p1> Description about the MyHouse performance </p1>
				</div>
			</div>
		</div>
		-->


		<div class = "timeline-container">
			<div class = "timeline-event-box">
				<div class = "timeline-event-section">
					<h2>Grant Park Meetup</h2>
					<h3>05/02/21</h3>
					<p2>Recorded as the largest shuffle meet-up ever held in Chicago, with over 100 people in attendance! This was the most successful and first official meet up held in Grant Park by the Chicago Shufflers. This was also the first collaboration between The Get Down Chicago and Chicago Shufflers!</p2>
				</div>
				<div class = "timeline-middle-line">
					<div class = "timeline-middle-header"><h1>01</h1></div>
				</div>
				<div class = "timeline-event-img">
					<img src = "<?php echo $base;?>/images/group/img-4.jpg">
				</div>
			</div>

			<div class = "timeline-event-box">
				<div class = "timeline-event-img">
					<img src = "<?php echo $base;?>/images/group/shufflepalooza-1.jpg">
				</div>
				<div class = "timeline-middle-line">
					<div class = "timeline-middle-header"><h1>02</h1></div>
				</div>
				<div class = "timeline-event-section">
					<h2>Shuffle-palooza</h2>
					<h3>07/24/21</h3>
					<p2>The inaugural shuffle festival for the Chicago Shufflers. This high-energy event was hosted over 2 days in the infamous Water Tower mall in downtown Chicago.</p2>
				</div>
			</div>

			<div class = "timeline-event-box">
				<div class = "timeline-event-section">
					<h2>MyHouse Performance</h2>
					<h3>08/28/21</h3>
					<p2>The Chicago shufflers returned to the My House Music Festival for their 4th year in a row, performing and collaborating! This was their first time dancing on the mainstage for a music festival!</p2>
				</div>
				<div class = "timeline-middle-line">
					<div class = "timeline-middle-header"><h1>03</h1></div>
				</div>
				<div class = "timeline-event-img">
					<img src = "<?php echo $base;?>/images/group/myhouse-1.jpg">
				</div>
			</div>
		</div>

		<div class = "general-desc" style = "margin-top: 20px; margin-bottom: 20px; text-align: center;">
			<p1>Check out our upcoming events</p1>
		</div>

		<!-- 
		===========================================================
		====================== COLLABS ============================
		===========================================================
		-->

		<div class = "main-header-block" style = "margin-top: 100px;">
			<h1> COLLABS </h1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Fuego Shoes</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>The Get Down Chicago</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Dance Rituals</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Whats Good Chicago</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>EDM Chicago</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>MyHouse Music Festival</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>The Mid</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Primary Night Club</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Trifecta Records</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Speaker Honey</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Proppa</p1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>IHeartTechno</p1>
		</div>
		
		<div class = "general-desc" style = "text-align: center;">
			<p1>ARC Music Festival</p1>
		</div>

	</div>


	<!-- 
		========================================================
		====================== MERCH ===========================
		========================================================
	-->

	<div class = "main-container" id = "merch-container">
		<div class = "main-header-block" id = "merch-section" style = "z-index: 1000;">
			<h1 id = "merch-header">BE THE VIBE</h1>
		</div>

		<div class = "img-slider-container" id = "img-slider-container" onclick = "change_merch_img();">
			<div class = "img-slider-fader" id = "img-slider-fader"></div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-1.jpg">
			</div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-2.jpg">
			</div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-3.jpg">
			</div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-4.jpg">
			</div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-5.jpg">
			</div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-6.jpg">
			</div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-7.jpg">
			</div>

			<div class = "img-slider-indiv">
				<img src = "<?php echo $base;?>/images/merch/img-8.jpg">
			</div>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Visit our shop!</p1>
		</div>
	</div>

	<?php include("footer.php"); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
<script type = "text/javascript" src = "<?php echo $base;?>/homepage.js?v=<?php echo $date;?>"></script>
</html>