<?php
    @session_start();
	$hostname="localhost";
	$username="root";
	$password="";
	$database="cura_pharmacy";
	$connection=mysqli_connect($hostname,$username,$password,$database) or die("Database is not connected");

	error_reporting(0);
	$dir_site = "C:\wamp\www";
	$url_site = "http://localhost/";
	$dir_site_admin = $dir_site."/panel";
	$url_site_admin = $url_site."/panel";
	mysqli_query($connection, "SET NAMES 'utf8'");

	include "functions.inc.php";
?>
