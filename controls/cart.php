<?php
session_start();
require_once('config.php');
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}else{
	$id = $_SESSION['user_id'];
	$quey =	"SELECT cart. unit,cart. product_id, products. uniqe, products. product, products. price ,products. image From cart INNER JOIN products ON cart. product_id=products. id WHERE cart. user_id = $id";
	$res = mysqli_query($connection, $quey);
	$html ='';
	$sno = 1;
    while($row = mysqli_fetch_assoc($res))
	{
		
		$html .= '<tr><td  >'.$sno.'</td>';
		$html .= '<td>'.$row["uniqe"].'</td>';
		$html .= '<td>'.$row["product"].'</td>';
		$html .= '<td>'.$row["unit"].'</td>';
		$html .= '<td>'.$row["price"].'</td>';
		$html .= '<td><img src="storage/'.$row["image"].'" width="50" height="50"></td>';
		$html .= '<td ><img src="img/delete.png" class="delet_product" value="'.$row["product_id"].'"></td></tr>';
		$sno++;
                        
	}
		echo $html;

}
$connection->close();
?>

