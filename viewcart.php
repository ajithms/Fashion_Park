<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	
	<style>
	.row-item-title {
		margin-top : 50px;
		margin-bottom : 5px;
		font-size : 40px;
	}
	</style>
</head>
<?php
	include('header.php');
	$total = 0;
	$sql = 	"SELECT p.product_id, p.product_name, p.price, p.category, p.image, c.quantity ".
		"FROM cart c, product p ".
		"WHERE p.product_id=c.product_id AND c.user_email='".$_SESSION['email']."'";
	$result = mysqli_query($db, $sql);
	
?>

<body>
	<div class="container-fluid" style="background-color:#132853">
		<div class="bar container"></div>
		<?php
		if(mysqli_num_rows($result) == 0 ) {
			echo "<p class='lead'> The Cart is Empty</p>";
		} else {
		while($row = mysqli_fetch_assoc($result)) {
		?>
		<div class="container" style="background-color:white">
			<div class="col-xs-3">
				<img src="<?php echo $row['image'] ?>" style="width:90%; margin:5px;" />
			</div>
			
			<div class='col-xs-7'>
				<p class="row-item-title" style="font-family: 'Anton', sans-serif;"><?php echo $row['product_name']; ?></p>
				<p style="font-size : 20px;" >in <?php echo $row['category']; ?></p>
				<p style="color : darkred; font-size : 20px;" ><i class="fa fa-inr"></i><?php echo $row['price']; ?></p>
			</div>
			<div class='col-xs-2'>
				<p style="font-size : 30px; margin-top : 40px" >Quantity: <?php echo $row['quantity']; ?></p>
				<p class='lead' style="font-size:30px; color : darkred; margin-top : 25px">
					<i class="fa fa-inr"></i>
					<?php 
					$sum = $row['price'] *  $row['quantity'];
					$total += $sum;
					echo $sum;
					?>
				</p>
				<a class="btn btn-danger" onclick="confirm('Remove Item From Cart!?');" href='removeitem.php?id=<?php echo $row['product_id']; ?>'>
					Remove
				</a>
			</div>
		</div>
		<div class="bar container"></div>
		<?php }} ?>

		<div class='container' style="background-color:white">
			<div class='col-xs-6'>	
				<p class='lead' style="margin-top:20px; font-size:40px; font-family: 'Anton', sans-serif;">
				Total Amount : <i class="fa fa-inr"></i><?php echo $total; ?></p>
			</div>
			<div class='col-xs-3'></div>
			<div class='col-xs-3'>
				<a class="btn btn-success btn-lg" style="width: 100%; margin-top:25px;" onclick="alert('Order Placed');";'>PLACE  ORDER</a>
			</div>
		</div>
		<div class="bar container"></div>
	</div>
	<div style="background-color:white; height:40px;"></div>
	<?php include('footer.php'); ?>
</body>
</html>
