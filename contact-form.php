<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $name." - ".$_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "admin@chicagoshufflers.com";
	$headers  = "From: ".$name."<".$mailFrom.">\n";
    //$headers .= "Cc: ".$name."<".$mailFrom.">\n";
    $headers .= "X-Sender: ".$name."<".$mailFrom.">\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n";
    $headers .= "Return-Path: <".$mailFrom.">\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
	$text = "\n\n".$message;

	mail($mailTo, $subject, $text, $headers);
	header("Location: index.php?mailsent");
}

?>