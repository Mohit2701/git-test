<?php
session_start();
require_once('config.php');
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}else{
	$id=$_SESSION['user_id'];
	 $orderquery = "SELECT order_id FROM order_details ORDER BY order_details. order_id DESC LIMIT 1";
      $res = mysqli_query($connection, $orderquery);
      $ordId = mysqli_fetch_assoc($res);
      $orderId = $ordId['order_id'];

    $totalquery="SELECT total_amount,date,id FROM ordes WHERE id= $orderId";
    $re = mysqli_query($connection, $totalquery);
    $total_amount = mysqli_fetch_assoc($re);
    echo $total_amount['total_amount']."@".$total_amount['date']."@".$total_amount['id'];

}
$connection->close();  
?>

