<?php
require_once('config.php');
session_start();
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit();  
}
else{
	$user_id = $_SESSION['user_id'];
	$query="SELECT * FROM products ";
	$result = mysqli_query($connection, $query);
	$html ='';
	$sno = 1;
    while($row = mysqli_fetch_assoc($result))
	{
		

		$html .= '<tr class="product_'.$row["id"].'"><td  class="td">'.$sno.'</td>';
		$html .= '<td class="product_info" "style="cursor:pointer;">'.$row["uniqe"].'</td>';
		$html .= '<td>'.$row["product"].'</td>';
		
		$html .= '<td class="stock">'.$row["stock"].'</td>';
		$html .= '<td>'.$row["price"].'</td>';
		$html .= '<td><img src="storage/'.$row["image"].'" width="50px" height="50px"></td>';
		$html .= '<td ><span class="'.$row["unit"].' "></span ><button value="'.$row["id"].'" class="to_Cart" style="color: white; background-color: orange;">Add TO Cart</button> </td></tr>';
		$sno++;
                        
	}
		echo $html;
}

$connection->close();
?>

