<?php include('header.php');
$res = mysqli_query($db, "select password from login where name='".$_SESSION['user']."';");
extract(mysqli_fetch_assoc($res));
echo "<script>var password = '".$password."';</script>";
?>
<html>
<head>
<script>
var val = false, val1 = false;
function validate() {
	var a = document.getElementsByName('new');
	if (a[0].value == a[1].value)  {
		document.getElementById('message').style.display = 'none';
		document.getElementById('message11').style.display = 'inline';
		val = true;
	}
	else  	{
		val = false;
		if (a[1].value != '' && a[0].value != '')
			document.getElementById('message').style.display = 'inline';
		else
			document.getElementById('message').style.display = 'none';
		document.getElementById('message11').style.display = 'none';
	}	
	return val;	
}

function verify (value) { 
val1 = false;
document.getElementById("message1").style.display = 'none';

if (password != value && value!='')
	document.getElementById("message1").style.display = 'block';
else val1 = true;
}
</script>
<style>
#outermost {

}
#outer {
	padding : 20px;
	padding-left : 100px;
	padding-right : 100px;
	margin-top : 10px;
	margin-bottom : 10px;
	background-color : white;
	border : 1px solid #132853;
}
</style>
</head>
<body >
<div class='bar'></div>
<div class='container-fluid' id='outermost'>
<div class='container' id='outer'>
	<p class='lead'><u><a href='home.php'>Home </a> > <?php echo $_SESSION['user']; ?> > Change Password </u></p>
	<form method = 'post' action='passwd.php'>
		<table width = '100%'>
		<tr>
			<td align='left'><p class='lead'>Current Password : </p></td>
			<td><input class='form-control' oninput='verify(this.value)' type='password' name='current' required /> </td>
		</tr>
		<tr>
			<td></td>
			<td id='message1' style='display:none;'><p style='color:red;'>Incorrect Password</p></td>
		</tr>
		<tr>
			<td align='left'><p class='lead'>New Password : </p></td>
			<td><input class='form-control' type='password' name='new'  required /> </td>
		</tr>
		<tr>
			<td align='left'><p class='lead'>Re-enter new Password : </p></td>
			<td><input oninput='validate()' class='form-control' type='password' name='new' required  /> </td>
		</tr>
		<tr>
			<td></td>
			<td id='message' style='display:none;'><p style='color:red;'>Passwords do not match</p></td>
			<td id='message11' style='display:none;'><p style='color:green;'>Passwords match!</p></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-submit" onsubmit="return val && val1;" type='submit' id = 'submit' value='Submit' /> </td>
		</tr>
		</table>
	</form>
</div>
</div>
</body>
</html>
