<?php header("Cache-Control: no-cache"); ?>

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
		================================================================
		====================== MAIN CONTAINERS =========================
		================================================================
	-->

	<div class = "main-half-container">
		<div class = "main-header-block">
			<h1>Upcoming</h1>
		</div>

		<div class = "event-scoreboard-container">
			<div class = "event-scoreboard" id = "event-scoreboard" style = "opacity: 0;">
				<!-- Current upcoming events -->
			</div>

			<div class = "event-scoreboard"  id = "class-scoreboard" style = "opacity: 0;">
				<!-- Current upcoming classes -->
			</div>
		</div>
	</div>

	<!-- 
		Main events inputted here from js
	-->
	<div class = "main-container" id = "main-event-container">

	</div>

	<div class = "main-container">
		<div class = "main-header-block">
			<h1>MORE...</h1>
		</div>

		<div class = "general-desc" style = "text-align: center;">
			<p1>Add all upcoming events to your <a href = "https://calendar.google.com/calendar/u/2?cid=Y2hpc2h1ZmZsZXJzQGdtYWlsLmNvbQ">Google Calendar</a></p1>
		</div>

		<div class = "upcoming-event-container" id = "event-container">

		</div>

		

		<div class = "empty-space"></div>
	</div>

	



	<?php include("footer.php"); ?>
</body>

<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
<?php include('./php-to-js/calendar.php'); ?>
<script type = "text/javascript" src = "<?php echo $base;?>/events.js?v=<?php echo $date;?>"></script>
</html>