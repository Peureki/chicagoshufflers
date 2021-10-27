<!-- 
	Insert base of the URL (home directory) to be placed into the href 
	By echoing in href, it displays in the URL
	Place this php at the top <head>
-->
<?php
	//$base = "https://www.chicagoshufflers.com";
	$base = "http://localhost/chicagoshufflers";
	$date = date("D M d, Y G:i"); // For versioning
?>
<!-- Tab icon -->
<link rel = "icon" href = "<?php echo $base;?>/images/logos/CS_Logo_02.jpg">

<!-- Main files -->
<link type = "text/css" rel = "stylesheet" href = "<?php echo $base;?>/styles.css?v=<?php echo $date;?>">

<!-- Shortcut Icon + Scalable view -->
<!--<link rel = "shortcut icon" href = "./images/logos/CS_Logo_02.jpg">-->
<meta name="viewport" content="height=device-height, 
    					width=device-width, initial-scale=1.0, 
                      	minimum-scale=1.0, maximum-scale=1.0, 
                      	user-scalable=no">