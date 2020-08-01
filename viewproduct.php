<?php 
	include('header.php');
	$id = $_GET['id'];
	$result = mysqli_query($db, "SELECT * FROM product where product_id='".$id."';");
?>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Fashion Park</title>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	
	</head>
	<body>
		<div class='bar'></div><br><br>
		<div class='container'>
			
			<?php $row = mysqli_fetch_assoc($result); ?>
			<div class="img-zoom-container col-xs-4">
			  <img id="myimage" src="<?php echo $row['image']; ?>" width="100%">
			</div>
			<div class='col-xs-8'>
				<p style="font-size:65px; font-family: 'Anton', sans-serif;"><?php echo $row['product_name']; ?></p>
				<p class='lead'>in <a href='listproducts.php?category=<?php echo $row['category']; ?>'><?php echo $row['category']; ?></a></p>
				<p class='lead' style="color:red; font-size:50px"><i class="fa fa-inr"></i><?php echo $row['price']; ?></p><br>
				<form method='post' class="row col-xs-4">
					<input class="form form-control" type='number' name='count' min='1' 
					max='<?php echo $row['quantity']; ?>' placeholder="Quantity" /> <br>

					<input class="btn btn-submit" type='submit' value="Add To Cart" name='cart' />
					<a href='home.php' class="btn btn-success">Home</a>
				</form>
			</div>
		</div><br><br>
		<?php include('footer.php'); ?>
	</body>
	<?php
		if(isset($_POST['cart'])) {
		if(isset($_SESSION['user'])) {
			if($_SESSION['user'] != 'admin') {
				$result = mysqli_query($db, "SELECT * FROM cart WHERE product_id='".$id."' AND user_email='".$_SESSION['email']."'");
				if(mysqli_num_rows($result) == 0) {
					$sql = "INSERT INTO cart VALUES ('".$id."','".$_POST['count']."','".$_SESSION['email']."')";
					echo $sql;
					if(mysqli_query($db, $sql))
						echo "<script>alert('Item added to cart');</script>";
					else
						echo "<script>alert('Item could not be added to cart');</script>";
				} else {
					$count = mysqli_fetch_assoc($result)['quantity'];
					$sql = "UPDATE cart SET quantity='".($count + $_POST['count'])."' WHERE product_id='$id' and user_email='".$_SESSION['email']."'";
					mysqli_query($db, $sql);
					if($db->affected_rows == 1 )
						echo "<script>alert('Item added to cart');</script>";
					else
						echo "<script>alert('Item could not be added to cart');</script>";
					echo $sql;
				}
			}
		} else echo "<script>window.location.href = 'login.php';</script>";
		}
	?>
</html>
