<?php
require_once('config.php');
session_start();
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit();  
}
else{
	$user_id = $_SESSION['user_id'];
	$orderquery = "SELECT order_id FROM order_details ORDER BY order_details. order_id DESC LIMIT 1";
	$res = mysqli_query($connection, $orderquery);
	$ordId = mysqli_fetch_assoc($res);
	$orderId = $ordId['order_id'];

	$query="SELECT order_details. unit,order_details. product_id,products. product, products. price ,products. stock From order_details INNER JOIN products ON order_details. product_id = products. id WHERE  order_details. order_id = $orderId";
	$result = mysqli_query($connection, $query);
	$html ='';
    while($row = mysqli_fetch_assoc($result))
	{
		
			$prodId = $row['product_id'];

			$html .= '<tr><td class="text-center">'.$row['unit'].'</td>';
            $html .=      '<td>'.$row['product'].'</td>';
            $html .=      '<td class="text-right">'.$row['price'].'</td>';

            $unit = $row['unit'];
            $price =$row['price'];
            $totalPrice = $unit*$price;

            /*$stock_query ="SELECT stock  FROM products WHERE id = '$prodId' ";
			$reslt = mysqli_query($connection, $stock_query);
			$stock = mysqli_fetch_assoc($reslt);*/
			$stock = $row['stock'];
			$newStock = $stock-$unit;

			$unitUpdate = "UPDATE products SET stock = '$newStock',unit = 0 WHERE id ='$prodId' ";
			mysqli_query($connection, $unitUpdate);

            $que = "UPDATE order_details SET price = ' $totalPrice' WHERE order_id ='$orderId' && product_id = '$prodId'";
            mysqli_query($connection, $que);
            $html .=      '<td class="text-right">'. $totalPrice.'</td></tr>';

                        
	}
		echo $html;
		$qury = "UPDATE ordes SET total_amount=(SELECT SUM(price) FROM order_details WHERE order_id =$orderId) WHERE id =$orderId";
		mysqli_query($connection, $qury);

		$deletCart = "DELETE FROM `cart` WHERE user_id = $user_id";
		mysqli_query($connection, $deletCart);


}

$connection->close();
?>

