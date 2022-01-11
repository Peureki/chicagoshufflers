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
		<div class = "main-box">
			<div class = "mid-box">
				<img onclick = "rotate_star(this)" src = "<?php echo $base;?>/images/assets/star.svg">
			</div>

			<div class = "left-right-container">
				<div class = "left-box">
					<!-- Headers --> 
					<div class = "header-abs"> CHICAGO </div>
				</div>

				<div class = "right-box">
					<div class = "header-abs"> SHUFFLERS </div>
				</div>
			</div>
		</div>
	</div> <!-- End of main container -->


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
</html>