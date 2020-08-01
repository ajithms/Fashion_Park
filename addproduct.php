<?php
	include('header.php');
	
	function quit() {
		header('location:home.php?fail=1');
	}

	if (isset($_SESSION['user'])) {
		if ($_SESSION['user'] != 'admin') quit();
	} else quit();
		
?>

<script>
	var val = false;
	function check(val) {
		if(val == '') {
			document.getElementById('message1').style.display = 'block';
			val = false;
		} else {
			document.getElementById('message1').style.display = 'none';
			val = true;
		}
	}
</script>

<html>
	<body>

		<form method='post' class="container">

			<table width = '100%'>
				<caption><p class='lead'><u>admin > Add Product</u> :-</p></caption>
				<tr>
					<td align='left'><p class='lead'>Product Name : </p></td>
					<td><input class='form-control' type='text' name='name' required /> </td>
				</tr>
				<tr>
					<td align='left'><p class='lead'>Price : </p></td>
					<td><input class='form-control' type='number' min='1' name='price'  required /></td>
				</tr>
				<tr>
					<td align='left'><p class='lead'>Category : </p></td>
					<td>
						<select class='form-control' name='category' onchange='check(this.value)'>
							<option value=''>--SELECT OPTION--</option>
							<option value='Pants'>Pants</option>
							<option value='Shirts'>Shirts</option>
							<option value='Caps'>Caps</option>
							<option value='Shoes'>Shoes</option>
						</select>
					</td>
				</tr>

				<tr>
					<td></td>
					<td id='message1' style='display:none;'><p style='color:red;'>Please select a valid option</p></td>
				</tr>
				<tr>
					<td align='left'><p class='lead'>Quantity : </p></td>
					<td><input class='form-control' type='number' min='1' name='quantity'  required /></td>
				</tr>
				<tr>
					<td align='left'>
						<p class='lead'>Path of the Image : </p>
						(Note : Specify a valid path 'image/imagename')
					</td>
					<td><input oninput='validate()' class='form-control' type='text' name='image' required  /> </td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-submit" onclick="val" type='submit' name='submit' value='Submit' /> </td>
				</tr>
			</table>
		</form>

		<?php
			if(isset($_POST['submit'])) {
				extract($_POST);
				$sql = "INSERT INTO product VALUES (NULL,'".strtoupper($name)."','".$price."','".$category."','".$quantity."','".$image."')";
				
				if(mysqli_query($db, $sql))
					echo "<script>alert('Value Successfully Entered');</script>";
				else //echo "<script>alert('Duplicate');</script>";
					echo $sql;
			}
		?>
	</body>
</html>
