 <?php
require_once('config.php');
session_start();
if (!isset($_SESSION['user_id'])) {
	header("Location:login.html");
	exit(); 
}
else{
	$user_id = $_SESSION['user_id'];
	
	$company = $_POST['company'];
	$live = $_POST['live'];
	$country = $_POST['country'];
	$description= $_POST['description'];
	

	$addr1 = $_POST['addr1'];
	$addr2 = $_POST['addr2'];

	$phone = $_POST['phone'];
	$cell = $_POST['cell'];
	$email = $_POST['email'];
	$skype= $_POST['skype'];

	$target_dir = "../storage/";
	$imgName = $_FILES['file']['name'];
	$type =  $_FILES['file']['type'];
	$im=explode('/',$type);
	$imgtype= ".".$im[1];

	$_FILES['file']['name'] = rand();
	$img = $_FILES['file']['name'];

	$imgName =$img.$imgtype;

	$target_file = $target_dir.$imgName/*.$imgtype*/;
	
	 
	if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    
    } else {
            }  
	$query="UPDATE users SET email='$email',company='$company',live='$live',contry='$country',description='$description',address1='$addr1',address2='$addr2',phone='$phone',cell='$cell',skype='$skype',images=' $imgName' WHERE id='$user_id'";
	
	mysqli_query($connection, $query);
	/*$path = explode('/',$target_file);
	$imgPath = $path[1]."/".$path[2];*/
	echo $imgPath;
}

$connection->close();
?>

