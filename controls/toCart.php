<?php
session_start();
require_once('config.php');
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}else{
	$id = $_POST['id'];
	$unit = $_POST['unit'];
	$prod_id = $id;
	$user_id = $_SESSION['user_id'];
   
	$querry =	"SELECT product_id FROM cart WHERE product_id=$id && user_id = $user_id";
	$result = mysqli_query($connection, $querry);
	$row=mysqli_num_rows($result);
		if ($row==0) {
					

			$query = "INSERT INTO cart(id, product_id, unit, user_id) VALUES ('','$prod_id','$unit','$user_id')";
			mysqli_query($connection, $query);

			$qu = "UPDATE products SET unit='$unit' WHERE id = '$prod_id'";
			mysqli_query($connection, $qu);
			
		}
		else{
			
			$query = "UPDATE cart SET unit='$unit' WHERE  product_id = '$prod_id'";
			mysqli_query($connection, $query);

			$qu = "UPDATE products SET unit='$unit' WHERE id = '$prod_id'";
			mysqli_query($connection, $qu);
			
			
		}
	
		
	}
$connection->close();
?>

