<?php
	$userName = 'root';
	$password = '';
	$serverName = 'localhost';
	$dbName = 'dashio';
	$connection = mysqli_connect($serverName, $userName, $password, $dbName);
	if (!$connection) {
		die("connection failed ". mysqli_connect_error());
	}

?>