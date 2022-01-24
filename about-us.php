<!DOCTYPE html>
<html>
<head> 
	<!-- Defaults, CSS, JS main files -->
	<?php include('config.php'); ?>
	<title> About Us </title>
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
	<div class = "about-desc-abs"> We are <span id = "about-keyword"> a community </span></div>
	<div id = "main-container" class = "main-container">
		<div class = "left-right-container">
			<div class = "about-left-box">
				<p1> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p1>
			</div>

			<div class = "about-right-box">
				<img src = "<?php echo $base;?>/images/group/img-4.jpg">
			</div>
		</div>
	</div> <!-- End of main container -->

	<div class = "main-container">
		<div class = "left-right-container">
			<div class = "about-left-box">
				<p1> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p1>
			</div>

			<div class = "about-right-box">
				<img src = "<?php echo $base;?>/images/group/img-5.jpg">
			</div>
		</div>
	</div> <!-- End of main container -->

	<div class = "main-container">
		<div class = "section-title">
			<h1> Get to Know Us</h1>
		</div>

		<div class = "flex-box">
			<div onclick =  "window.open('https://www.youtube.com/watch?v=bgkEk5PhQcQ', '_blank');" class = "shuffler-showcase">
				<h1> Bebo </h1>
				<img src = "<?php echo $base;?>/images/individuals/bebo.jpg">
				<span> &#9654; </span>
			</div>

			<div onclick =  "window.open('https://www.youtube.com/watch?v=jQM_7BG772A', '_blank');" class = "shuffler-showcase">
				<h1> Snow </h1>
				<img src = "<?php echo $base;?>/images/individuals/snow.jpg">
				<span> &#9654; </span>
			</div>

			<div onclick =  "window.open('https://www.youtube.com/watch?v=z2mYa11hHi8', '_blank');" class = "shuffler-showcase">
				<h1> D.J. </h1>
				<img src = "<?php echo $base;?>/images/individuals/dj.jpg">
				<span> &#9654; </span>
			</div>
		</div>
	</div> <!-- End of main container -->


</body>
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
</html>