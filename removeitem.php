<?php	
	$db = mysqli_connect("localhost","root","","fashion");
	session_start();

	mysqli_query($db, "DELETE FROM cart WHERE product_id='".$_GET['id']."' AND user_email='".$_SESSION['email']."'");
	header('location:viewcart.php');
?>
