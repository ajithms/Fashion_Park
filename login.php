<!DOCTYPE html>
<?php
        session_start();
     $db = mysqli_connect("localhost","root","", "fashion");
?>
<html>
<head>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="image/icons/fs.jpeg" />
<style>
body {font-family: Arial, Helvetica, sans-serif;color : #132853; }
fieldset { margin:10px;border:solid;padding:0 }
legend {  width:inherit;border:none; }
img.avatar {
  width: 20%;
  border-radius: 50%;
}

</style>
</head>
<body style="background-color: lightseagreen">
    <div class="row">
        <div class="col-xs-4"></div>
        
        <div class="col-xs-4"  style="background-color:white;margin-top:50px;"> 
        
        <form method="POST">
		 <fieldset>
			<legend align="center"><h2>Login</h2></legend>
            <div align="center">
              <img src="image/avatar.png"  class="avatar">
            </div>

            <div style="padding:25px">
                <br><label class="lead"><b>Email</b></label><br>
              <input type="email" placeholder="email" name="mail" required class="form-control">

              <br> <label class="lead"><b>Password</b></label><br>
              <input type="password" placeholder="Password" name="passwd"  class="form-control"><br>

              <button type="submit" class="btn btn-success" name="submit" style="width:40%">Login</button>
                <br><br><p align="center" >--- OR ---</p>
            <a href="signup.php" class="btn btn-info form-control">Sign Up</a>
           </div>
		   </fieldset>
		   <?php
                        if(isset($_GET['alert']) )
                              echo '<script>alert("Registered Successfully.Please Login!!");</script>';
                        
                        ?>
        </form>
          <br>
        </div>
        <div class="col-xs-4"></div>
    </div>
    <?php
	if(isset($_POST['submit'])) {
		
		$sql = "select name from login where email='".$_POST["mail"]."' and password='".$_POST['passwd']."';";
		echo $sql;
		$result = mysqli_query($db, $sql);
		if ( mysqli_num_rows($result) > 0 )  {
			$row=mysqli_fetch_assoc($result);
			$_SESSION["user"] = $row['name'];
			$_SESSION["email"] = $_POST['mail'];
			header("location:home.php");
		
		}

        }
?>
  <div style="height:30px"></div>
</body>
</html>
