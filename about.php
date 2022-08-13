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

	<div class = "main-container">
		<div class = "center-desc">
			<p1> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p1>
		</div>
	</div>

	<div class = "main-container" id = "main-roster-container">
		<!--
		<div class = "main-header" style = "position: sticky; top: 0;">
			<h1 id = "class-header"> 
				<span>M</span>
				<span>E</span>
				<span>E</span>
				<span>T</span>
				<span style = "padding-left: 20px; padding-right: 20px;"> </span>
				<span>T</span>
				<span>H</span>
				<span>E</span>
				<span style = "padding-left: 20px; padding-right: 20px"></span>
				<span>T</span>
				<span>E</span>
				<span>A</span>
				<span>M</span>
			 </h1>
		</div>
		-->
		<div class = "vertical-header" id = "teams-header">
			<h1> TEAM </h1>
		</div>

		<div class = "roster-container">
			<div class = "roster-collage">
				<div class = "roster-img" id = "roster-1">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/manny.jpg">
					<h1> Don, Leader </h1>
				</div>
				
				<div class = "roster-img" id = "roster-2">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/jesse.jpg">
					<h1> Jesse, Admin & Co-Leader </h1>
				</div>

				<div class = "roster-img" id = "roster-3">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/courtney.jpg">
					<h1> Courtney, Admin & Co-Leader & Social Media Manager </h1>
				</div>

				<div class = "roster-img" id = "roster-4">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/Amrita.jpg">
					<h1> Amrita, Administrator </h1>
				</div>

				<div class = "roster-img" id = "roster-5">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/xavier.jpg">
					<h1> Xavier, Event Coordinator Director </h1>
				</div>

				<div class = "roster-img" id = "roster-6">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/santana.jpg">
					<h1> Santana, Resident Performer & Dance Instructor </h1>
				</div>

				<div class = "roster-img" id = "roster-7">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/kimmy.jpg">
					<h1> Kimmy, Graphic Designer </h1>
				</div>

				<div class = "roster-img" id = "roster-8">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/kristopher.jpg">
					<h1> Ktop, Videographer </h1>
				</div>
			</div>

			<div class = "roster-collage" id = "second-roster">
				<div class = "roster-img" id = "roster-1">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/manny.jpg">
					<h1> Don, Leader </h1>
				</div>
				
				<div class = "roster-img" id = "roster-2">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/jesse.jpg">
					<h1> Jesse, Admin & Co-Leader </h1>
				</div>

				<div class = "roster-img" id = "roster-3">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/santana.jpg">
					<h1> Courtney, Admin & Co-Leader & Social Media Manager </h1>
				</div>

				<div class = "roster-img" id = "roster-4">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/Amrita.jpg">
					<h1> Amrita, Administrator </h1>
				</div>

				<div class = "roster-img" id = "roster-5">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/xavier.jpg">
					<h1> Xavier, Event Coordinator Director </h1>
				</div>

				<div class = "roster-img" id = "roster-6">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/santana.jpg">
					<h1> Santana, Resident Performer & Dance Instructor </h1>
				</div>

				<div class = "roster-img" id = "roster-7">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/kimmy.jpg">
					<h1> Kimmy, Graphic Designer </h1>
				</div>

				<div class = "roster-img" id = "roster-8">
					<div class = "img-fader"></div>
					<img src = "<?php echo $base;?>/images/individuals/kristopher.jpg">
					<h1> Ktop, Videographer </h1>
				</div>
			</div>
		</div>
	</div>


	<div class = "main-container">

	</div>
	

	<?php include("footer.php"); ?>
</body>
	<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>
	<script type = "text/javascript" src = "<?php echo $base;?>/about.js?v=<?php echo $date;?>"></script>
</html>