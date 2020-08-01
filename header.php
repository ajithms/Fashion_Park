<!DOCTYPE html>
<?php
	session_start();
     $db = mysqli_connect("localhost","root","", "fashion");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="shortcut icon" type="image/x-icon" href="image/icons/fs.jpeg" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
	    .bar {
		height : 15px;
		background-color: #132853;
		}
            .navbar {
                margin : 0;
                background-color: #132853;
                border : 0;
            }
            .navbar-toggle {
                background-color: #132853 ;
                border : 0;
            }
            
            .jumbotron {
                padding-top : 10px;
                padding-left : 10px;
		height : 100px;
                background-color: white;
            }
            a {
                color:inherit;
                  }
            a:hover {
                color:inherit;
                text-decoration: none;
            }
            .blue {
                color : #132853;
            }
            
            #large {
                display : block;
            }
            
            #small {
                display : none;
            }
                     
            @media(max-width: 1020px) {
                #large {
                    display: none;
                }
                #small {
                    display : block;
                }
            }
        </style>
    </head>
    <body>
                <nav class="navbar navbar-inverse" >
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#Nav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        
                    </button>
                    <a class="navbar-brand"><i>FASHIONS FADE, STYLE IS ETERNAL</i></a>
                </div>
                <div id="Nav" class="navbar-collapse collapse">
                    <ul class="navbar-nav nav navbar-right">
                        <?php if(isset($_SESSION['user'])) { ?>

				<li><a href="settings.php"> <?php echo $_SESSION['user'];?> <i class="fa fa-cogs"></i></a></li>
				<?php if ($_SESSION['user'] != 'admin') { ?>
				<li><a href="viewcart.php">My Cart</a></li>
				<?php } else { ?>
				<li><a href="addproduct.php">Add product</a></li>
				<?php  } ?>
				<li><a href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

			<?php } else { ?>

				<li><a href="login.php" ><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
	
                        <?php } ?>
                     </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron container-fluid row" id="large" >
            <div class="col-md-1">
                <img src="image/logo1.png" style="height:110px">
            </div>
            <div class="col-md-11">
                <p class="blue" align="center" style='font-size :75px; font-family: "Times New Roman", Times, serif;'>
                    <b> <a href="home.php">FASHION PARK</a></b>
                </p>
            </div>
        </div>
        
        <div class="jumbotron" id="small">
            <div class="col-xs-1">
                <img src="image/logo1.png">
            </div>
            <div class="col-xs-11">
                <p class="blue" align="center" style='font-size :45px; font-family: "Times New Roman", Times, serif;'>
                    <br /><b><a href="home.php">FASHION PARK</a></b>
                </p>
            </div>
        </div>

    </body>
</html>
