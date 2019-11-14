<?php
session_start();
require_once('config.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "select id from users where username='$username' && password='$password' ";
$result = mysqli_query($connection, $query);
$row = mysqli_num_rows($result);
if ($row >0){
	$data = mysqli_fetch_assoc($result); 
	$_SESSION['user_id']=$data['id'];
	header("Location:../dashboard.php");
}else{
	header("Location:index.html");
}  

$connection->close();
?>