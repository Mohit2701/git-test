<?php
require_once('config.php');
session_start();
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}
else{
	$user_id = $_SESSION['user_id'];
	$query="SELECT * FROM users WHERE id='$user_id'";
	$result = mysqli_query($connection, $query);
	$html ='';
    while($row = mysqli_fetch_assoc($result))
	{
		
		$html.= '<p><img src="storage/'.$row["images"].'"  class="img-circle"></p>';
		$html.='<p>Name:  '.$row["fname"].' '.$row["lname"].'</p>';
		$html.='<p>Email: '. $row["email"].'</p>';
		$html.='<p>Company: '. $row["company"].'</p>';
		$html.='<p>live In: '. $row["live"].'</p>';
		$html.='<p>Country: '. $row["contry"].'</p>';
		$html.='<p>Description: '. $row["description"].'</p>';
		$html.='<p>Address: '. $row["address1"].'"</br>"'.$row["address2"].'</p>';
                                    
		$html.='<p>Phone: '. $row["phone"].'</p>';
		$html.='<p>Cell: '. $row["cell"].'</p>';
		$html.='<p>Skype: '. $row["skype"].'</p>';
                        
	}
		echo $html;
    /*$img=$row['images'];
    $imgName="storage/".$img;
	echo $imgName;*/
}

$connection->close();
?>

