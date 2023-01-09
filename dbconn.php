<?php
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}
	$MySQL = mysqli_connect("localhost","root","","baza_php",) or die('Error connecting to MySQL server.');
?>