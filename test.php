<html>
	<head>
		<title>my page</title>
	</head>
	<body>
	   <form name="myform" method="post">
Enter name: <input type="text" name="uname"></input>
Enter password:<input type="password" name="pass"></input>
<input type="submit" value="LOGIN"></input>		
		</form>
	</body>
<?php
	if(isset($_POST['uname']))
	{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$conn=mysqli_connect("localhost","root",'',"test1");
	$qury="select * from login where uname='".$uname."' and password='".$pass."';";
	$res=mysqli_query($conn,$qury);
	if(mysqli_num_rows($res)>0)
	{
		echo "welcome ".$uname;
	}
	else
	{
		echo "error";
	}
	}
?>

</html>
