<?php
session_start();
require_once('config.php');
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}else{
	$id = $_SESSION['user_id'];
	$date = date("Y-m-d");

	$query = "SELECT live, contry,  address1, phone FROM users WHERE id ='$id' ";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	if ($row['live']=="" || $row['contry']=="" || $row['address1']=="" || $row['phone']=="0" ) {
		echo "e";
		die(); 
	}
	else{

		$insert_query =	"INSERT INTO ordes(user_id, date, total_amount) VALUES ('$id','$date','0')";
		 		mysqli_query($connection, $insert_query);
		 
		$orderId_query =	"SELECT id FROM ordes WHERE user_id=$id  ORDER BY id DESC";
		$connect = mysqli_query($connection, $orderId_query);
		$fetchId = mysqli_fetch_assoc($connect);
		$orderId = $fetchId['id'];

		$order_query = "INSERT INTO order_details (product_id,unit,user_id,order_id) SELECT product_id, unit,users. id,$orderId as order_id  FROM cart,users WHERE users. id=$id  ";
		 mysqli_query($connection, $order_query);

	}
}
$connection->close(); 
?>

