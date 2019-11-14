<?php
session_start();
require_once('config.php');
$user_id = $_SESSION['user_id'];
$query = "SELECT product_id FROM cart WHERE user_id = '$user_id' ";
$result = mysqli_query($connection, $query);
$row = mysqli_num_rows($result);
echo $row;
if ($row !=0) {
	$_SESSION['cart']=$row;
}
 
$connection->close();
?>