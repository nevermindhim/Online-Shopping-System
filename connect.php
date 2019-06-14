<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="shop";

	// Create connection
	$con = new mysqli($servername, $username, $password,$db);

	// Check connection
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	else{
	//echo "Connected successfully";
	}
?>