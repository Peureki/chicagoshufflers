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
			<div class = "event-scoreboard" id = "event-scoreboard">
				<!-- Current upcoming events -->
			</div>

			<div class = "event-scoreboard"  id = "class-scoreboard">
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
			<h1> UPCOMING EVENTS </h1>
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