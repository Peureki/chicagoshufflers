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



	<div class = "main-container" >
		<!--
		<div class = "main-header-block">
			<h1 id = "shuffle-header"> 
				<span>N</span>
				<span>E</span>
				<span>X</span>
				<span>T</span>
				<span style = "padding-left: 20px; padding-right: 20px;"> </span>
				<span>C</span>
				<span>L</span>
				<span>A</span>
				<span>S</span>
				<span>S</span>
			 </h1>
		</div>
		-->

		<div class = "main-header-block"><h1 id = "instructor-name">CIARA CASTRO</h1></div>

		

		<div class = "countdown-container">

			<div class = "countdown">
				<h1 id = "days"> 00d</h1>
				<h1 id = "hours"> 00h</h1>
				<h1 id = "minutes"> 00m</h1>
				<h1 id = "seconds"> 00s</h1>
			</div>

			<h2><span id = "target-date"> </span> <span id = "target-time"> </span></h2> 
			<h2><span class = "red-text"><a href = "https://ciarashuffles.as.me/schedule.php" target = "_blank">Sign up</a></span></h2>

			<img src = "<?php echo $base;?>/images/posters/classes/ciara-7-14-22.jpg">
		</div>

		<div class = "general-desc">
			<p1> CHICAGO!!! I can't believe I'm coming to your city! It's been a long time coming and I feel HONORED to bringing my Power Up shuffle tour to the Chicago Shufflers community and fam. Y'all already know the vibes, I'm coming in hard. 😈 Expect Melbourne shuffling + power style tendencies / workshop + choreography!

			I"m honestly ready to have a legendary time and create insane memories. </p1>
		</div>
	</div>

	<div class = "main-container">
		<div class = "main-header-block">
			<h1> UPCOMING CLASSES </h1>
		</div>

		<div class = "upcoming-event-container">
			<div class = "upcoming-event-box">
				<div class = "upcoming-event-num">
					<h1> 01 </h1>
				</div>
				<div class = "upcoming-event-card">
					<h1> CiCi Stamper </h1>
					<h2> 7/18/22, 8:00pm</h2>
					<h2> The Rooted Space </h2>
					<p1><a href = "https://www.cicistamper.com/event-details/heatwave-music-festival-shuffle-masterclass" target = "_blank"> Sign up </a></p1>
				</div>		
			</div>

			<div class = "upcoming-event-box">
				<div class = "upcoming-event-num">
					<h1> 02 </h1>
				</div>
				<div class = "upcoming-event-card">
					<h1> Vanesa Seco </h1>
					<h2> 8/28/22, 4:00pm - 7:30pm</h2>
					<h2> Visceral Dance Center </h2>
					<p1><a href = "https://www.tickettailor.com/events/makesyouvannadance/700756" target = "_blank"> Sign up </a></p1>
				</div>
			</div>
		</div>

		<div class = "empty-space"></div>
	</div>

	




</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
<script type = "text/javascript" src = "<?php echo $base;?>/classes.js?v=<?php echo $date;?>"></script>
</html>