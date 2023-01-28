<!-- 
	================================================================
	====================== CONTACT FORM ============================
	================================================================
-->

<div class = "contact-form-container" id = "contact-form-container">
	<button type = "text" id = "contact-form-exit">X</button>
	<h1 class = "">Contact Us</h1>
	<form class = "contact-form" action = "contact-form.php" method = "post">
		<input type = "text" name = "name" placeholder = "Full Name">
		<input type = "text" name = "mail" placeholder = "Email">
		<input type = "text" name = "subject" placeholder = "Subject">
		<textarea name = "message" placeholder = "Message"></textarea>
		<button type = "submit" name = "submit">Send Message</button>
	</form>
</div>

<div class = "footer-outline">
	<img src = "<?php echo $base;?>/images/logos/chicago-outline-white-2.png">
</div>

<div class = "footer-container">
	<div class = "footer-box">
		<div class = "footer-section" id = "footer-logo">
			<a href = "<?php echo $base;?>"><img src = "<?php echo $base;?>/images/logos/Logo_White.png"></a>
		</div>

		<div class = "footer-section" id = "footer-nav">
			<ul>
				<li><a href = "<?php echo $base;?>/shuffling.php">Shuffling</a></li>
				<li><a href = "<?php echo $base;?>/about.php">About</a></li>
				<li><a href = "<?php echo $base;?>/events-and-classes.php">Events</a></li>
				<li><a href = "<?php echo $base;?>/events-and-classes.php">Classes</a></li>
				<li><a href = "https://shop.sadboitees.com/chicago_shufflers/shop/home" target = "_blank">Merch</a></li>
			</ul>
		</div>

		<div class = "footer-section" id = "footer-social">
			<div class = "footer-inner-section">
				<ul>
					<li><a href = "https://www.instagram.com/chicagoshufflers/" target = "_blank" title = "Instagram @chicagoshufflers"><img src = "<?php echo $base;?>/images/assets/instagram.svg"></a></li>
					<li><a href = "https://www.facebook.com/chicagoshufflers" target = "_blank" title = "Facebook @chicagoshufflers"><img src = "<?php echo $base;?>/images/assets/facebook.svg"></a></li>
					<li><a href = "https://www.youtube.com/channel/UCrudQ_ci6tFss6W0aVtFHWw" title = "Youtube @chi shufflers"><img src = "<?php echo $base;?>/images/assets/youtube.svg"></a></li>
					<li><a href = "mailto: chicagoshufflers@gmail.com" title = "Gmail: chicagoshufflers@gmail.com"><img src = "<?php echo $base;?>/images/assets/mail.svg"></a></li>
					<li><a href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fopen.spotify.com%2Fuser%2F31wctfdvuehypo3jewakiiz55ife%3Fsi%3D71e9aa49a7c14bc9%26fbclid%3DIwAR3aRnEcxvq4OKP6e-zaqwIE36rtfg4cT9hRUAOzeUKkMgYrQsGRMAXkdpE&h=AT3rFsUKNftcsiX01YI_SK8TyITwDFjcADaiM6ZGaXhewu-2bLdeCjQDVnQICczYLNCrPTkBKeScj83x12uWD00GTxuPUR8VIgykr1eeuYL7V_yOOeNhHsr3bpaHLBqjQRM3gY_dtzifExYbQ4w" target = "_blank" title = "Spotify Playlists"><img src = "<?php echo $base;?>/images/assets/spotify.svg"></a></li>
				</ul>

				<button type = "text" class = "contact-button">Contact Us</button>
				<div class = "footer-plug"><p1>Created by: <a href = "https://www.instagram.com/peurekii/" target = "_blank">@peurekii</p1></div>

			</div>
		</div>
	</div>
</div>