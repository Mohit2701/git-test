<?php
require_once('config.php');
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email= $_POST['email'];
	$query = "INSERT INTO users(id, fname, lname, password, email,  username) VALUES 
	('','$firstname','$lastname','$password','$email','$username')";
	mysqli_query($connection, $query);
	
$connection->close();
?>

