<!DOCTYPE html>
<html>
<head> 
	<!-- Defaults, CSS, JS main files -->
	<?php include('config.php'); ?>
	<title> Merch </title>
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
		<div class = "merch-box">
			<div class = "merch-left">
				<div class = "merch-name">
					<h1> Hat/Jersey </h1> 
				</div>
				<img src = "<?php echo $base;?>/images/merch/img-1.jpg">
				<div class = "merch-price">
					<p1> $20 </p1>
					<button> Buy </button>
					<div class = "clear"></div>
				</div>
				
			</div>

			<div class = "merch-mid">
				<div class = "merch-name">
					<h1> Bucket Hat </h1> 
				</div>
				<img src = "<?php echo $base;?>/images/merch/img-2.jpg">
				<div class = "merch-price">
					<p1> $20 </p1>
					<button> Buy </button>
					<div class = "clear"></div>
				</div>
				
			</div>

			<div class = "merch-right">
				<div class = "merch-name">
					<h1> Cap </h1> 
				</div>
				<img src = "<?php echo $base;?>/images/merch/img-3.jpg">
				<div class = "merch-price">
					<p1> $20 </p1>
					<button> Buy </button>
					<div class = "clear"></div>
				</div>
			</div>
		</div>
	</div> <!-- End of main container -->


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
</html>