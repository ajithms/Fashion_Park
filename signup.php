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
form {border: 3px solid #f1f1f1;}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

</style>
</head>
<body style="background-color: lightseagreen">
    <div style="height:30px"></div>
    <div class="row">
        <div class="col-xs-4"></div>
        
        <div class="col-xs-4"  style="background-color:white"> 
        <h1>Sign Up Form</h1>
        <form method="POST">
            <br><div align="center">
              <img src="image/avatar.png"  class="avatar">
          </div>

            <div style="padding:25px">
                <br><label class="lead"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="newname" required  class="form-control">
				<br><label class="lead"><b>Email</b></label>
              <input type="email" placeholder="Enter email" name="mail" required  class="form-control">
              <br>  <label class="lead"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="newpasswd" required class="form-control">
                     <p class="lead">
                        <?php
                        if(isset($_GET['fail']) )
                              echo '<script>alert("Email Exists!!Please Login");</script>';
                        
                        ?>
                    </p>
              <button type="submit" class="btn btn-primary form-control" name="submit">Register</button><br>
               <br><p align="center" class="lead">--- OR ---</p>
                 <a href="login.php" class="btn btn-info form-control" >Already have an account? Sign In</a>
           </div>
        </form><br>
          </div>
        <div class="col-xs-4"></div>
    </div>
    <?php 
    if(isset($_POST['submit'])) {
                
            $sql = "insert into login (name,email,password ) values ( '".$_POST["newname"]."','".$_POST["mail"]."','".$_POST["newpasswd"]."');";
            if(mysqli_query($db,$sql)) {
            header("location:login.php?alert=1");
            } else {
                header("location:signup.php?fail=true");
            }
        
    }
    ?>
  <div style="height:30px"></div>
</body>
</html>
