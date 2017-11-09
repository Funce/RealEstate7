<?php
	//CLEAR EVERYTHING EXCEPT PROBABLY THE COOKIES
	session_start();
	$_SESSION = array();
	session_destroy();
	header("Location: index.php");
?>