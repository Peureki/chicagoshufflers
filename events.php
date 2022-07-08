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
		<div class = "main-header-block"><h1> SHUFFLE-PALOOZA</h1></div>

		<div class = "countdown-container">

			<div class = "countdown">
				<h1 id = "days"> 00d</h1>
				<h1 id = "hours"> 00h</h1>
				<h1 id = "minutes"> 00m</h1>
				<h1 id = "seconds"> 00s</h1>
			</div>

			<h2><span id = "target-date"> </span> <span id = "target-time"> </span></h2> 
			<h2><span class = "red-text"><a href = "https://ra.co/events/1547130?fbclid=IwAR11m1vCa0pFqhk4oaD_x8nTL400YBnFY2Q3l3-nBTzn68IfuyRYyJJI0Ko" target = "_blank">Buy Tickets</a></span></h2>

			<img src = "<?php echo $base;?>/images/posters/events/shufflepalooza-07232022.jpg">
		</div>

		<div class = "general-desc">
			<p1> Grab your tickets and meet us on the dance floor as various members of the dance and shuffle community unite for a night of dancing, flowing, and growing together.

			This isn't just your average shuffle meetup. This is a fully curated event. We're bringing a Chicago House music legend and some of the hottest DJs/producers in Chicago to a never before used DIY space and adding in full light and sound production.</p1>
		</div>
	</div>

	<div class = "main-container">
		<div class = "main-header-block">
			<h1> UPCOMING EVENTS </h1>
		</div>

		<div class = "upcoming-event-container">
			<div class = "upcoming-event-box">
				<div class = "upcoming-event-num">
					<h1> 01 </h1>
				</div>
				<div class = "upcoming-event-card">
					<h1> MyHouse Music Festival </h1>
					<h2> 8/13/22, 3pm - 10pm</h2>
					<h2> Harrison Park </h2>
					<p1><a href = "https://cashdrop.biz/d/I22LYgXZWS" target = "_blank"> Buy Tickets </a></p1>
				</div>
			</div>

			<div class = "upcoming-event-box">
				<div class = "upcoming-event-num">
					<h1> 02 </h1>
				</div>
				<div class = "upcoming-event-card">
					<h1> ARC Music Festival </h1>
					<h2> 9/2/22 - 9/4/22, 2pm - 10pm</h2>
					<h2> Union Park </h2>
					<p1><a href = "https://arcmusicfestival.com/" target = "_blank"> Buy Tickets </a></p1>
				</div>
			</div>
		</div>

		

		<div class = "empty-space"></div>
	</div>

	




</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
<script type = "text/javascript" src = "<?php echo $base;?>/events.js?v=<?php echo $date;?>"></script>
</html>