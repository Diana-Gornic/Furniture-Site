<?php 

	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "loginsys";

	$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName) or die("connection failed:");

	echo "conectat";