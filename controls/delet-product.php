<?php
session_start();
require_once('config.php');
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}else{
	$id=$_POST["id"];
	$query = "DELETE FROM cart WHERE product_id='$id' ";
	$result = mysqli_query($connection, $query);

	$qu = "UPDATE products SET unit='0' WHERE id = '$id'";
			mysqli_query($connection, $qu);
	

}
$connection->close(); 
?>

