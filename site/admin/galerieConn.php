<?php 

	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "galerie";

	$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName) or die("connection failed:");
	