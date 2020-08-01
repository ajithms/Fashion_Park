<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Fashion Park</title>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        <style>
            .styl {
                color:#132853;
                font-size:40px;
                font-weight: bold;
                margin:50px;
                margin-right: 250px;
                background-color: white;
                font-family: serif;
            }
            .styl:hover {
                background-color: seashell;
            }
            body {
                background-color: #132853;
            }

	.item {
		height : 200px;
		background-color : white;
	}
	
	.row-item {
		height : 190px;
		margin-top : 5px;
		width : 200px;
		margin-left : 0;
	}

	.row-item-title {
		margin-top : 20px;
		margin-bottom : 5px;
		font-size : 40px;
	}
	 
        </style>
    </head>
    <body>
	<?php
		include 'header.php';
        ?>
	<div class='container-fluid' style="background-color : #132853">
	<div class='container'>
		<div class='bar'></div>
	<?php
		$result = mysqli_query($db, "SELECT * FROM product WHERE category='".$_GET['category']."';");
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
	?>
		<div class='bar'></div>
		<div class="row item" style='border: 1px solid red' >
			<div class="col-xs-3">
				<img class='row-item' src=<?php echo "'".$row['image']."' "; ?>/>
			</div>
			<div class='col-xs-7'>
				<p class="row-item-title" style="font-family: 'Anton', sans-serif;"><?php echo $row['product_name']; ?></p>
				<p style="font-size : 20px;" >in <?php echo $_GET['category']; ?></p>
				<p style="color : darkred; font-size : 20px;" ><i class="fa fa-inr"></i><?php echo $row['price']; ?></p>
			</div>
			<div class="col-xs-2">
				<a class="btn btn-info" style="margin-top:75px" href='viewproduct.php?id=<?php echo $row['product_id']; ?>'> View Product</a>
			</div>
		</div>
		<div class='bar'></div>
	
	<?php
			}
		}
	?>
	<div class='bar'></div>
	</div>
	</div>
	<div style="background-color:white; height : 30px"></div>
    <?php
	include('footer.php');
	
	?>
    </body>
</html>
