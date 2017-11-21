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


	//Set up root directory for img sources
	define('IMG_DIR', str_replace(DIRECTORY_SEPARATOR, '/', __DIR__).'/img/');
	define('ROOT_DIRECTORY', "http://" . $_SERVER['SERVER_NAME']. '/RealEstate7/');
	// set up some defines for Role permissions
	define("ADMIN_LEVEL", 9);
	define("USER_LEVEL", 1);

	//width for the images creation
	define('THUMBNAIL_WIDTH', 400);
?>