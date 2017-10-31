<?php
	// start session
	session_start();

	// set up all variables for database
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "realestate7_database";
	// link to database server and select the database
	$link = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno())
	{
		die("Connection error: " . mysqli_connect_error());
	}
	// set up some defines for Role permissions
	define("ADMIN_LEVEL", 9);
	define("USER_LEVEL", 1);
?>