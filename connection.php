<?php 
	$host = "localhost";
	$database = "blogs";
	$username = "root";
	$pass = "";
	
	$conn = new mysqli($host,$username,$pass,$database);
	
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
//	echo "Connected successfully";
