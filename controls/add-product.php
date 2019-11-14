<?php
require_once('config.php');
session_start();
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}
else{
	$user_id = $_SESSION['user_id'];
	
	$name = $_POST['name'];
	$stock = $_POST['stock_unit'];
	$price = $_POST['price'];
	$description= $_POST['product_des'];

	$u=substr($name,0,4);
	$r=rand();
	$unqName=$u.$user_id."dash".$r;
	
	$target_dir = "../storage/";
	$imgName = $_FILES['file']['name'];
	$type =  $_FILES['file']['type'];
	$im=explode('/',$type);
	$imgtype= ".".$im[1];

	$_FILES['file']['name'] = rand();
	$img = $_FILES['file']['name'];

	$imgName =$img.$imgtype;

	$target_file = $target_dir .$imgName/*.$imgtype*/;
	
	 
	if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    
    } else {
            }  
	$query="INSERT INTO products(id, uniqe,user_id, product, stock, price, image, description) VALUES ('','$unqName','$user_id','$name','$stock','$price','$imgName','$description') ";
	mysqli_query($connection, $query);
	echo $imgName;
}

$connection->close();
?>

