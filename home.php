
<html>
    <head>
        <title>FashionPark</title>
        <link rel="shortcut icon" type="image/x-icon" href="image/icons/fs.jpeg" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style>
            
            .button {
                text-decoration: none;
                font-size : 15px;
                margin-right: 15px;
            }
            
            #sl1 {
             
              text-align: right;
              padding-bottom: 100px;
            }
            #sl3 {
                text-align: left;
                padding-bottom: 100px;
            }
             #sl2 {
                padding-bottom: 100px;
            }
            
            #caption  {
                display : none;
                width : 100%;
            }
            
            .light:hover #caption {
                display : block;
            }
            
            
            
        </style>
    
    </head>
    <body>
	<?php
	if (isset($_GET['change'])) 
		echo "<script>alert('Password Updated Successfully!'); ".
		"window.location = window.location.href.split('?')[0]; </script>";

	if (isset($_GET['fail'])) 
		echo " <script>alert('Sorry, You are not an admin'); ".
		"window.location = window.location.href.split('?')[0]; </script>";
        
	include 'header.php';
	?>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="image/sliders/slider3.jpg" alt="Los Angeles">
                <div class="carousel-caption" id="sl1">
                    <h2>Welcome to FashionPark</h2>
                    <p class="lead">Best offers available here</p>
                </div>
              </div>

              <div class="item">
                <img src="image/sliders/slider2.jpg" alt="Chicago">
                <div class="carousel-caption" id="sl2">
                <h2>CUSTOM MADE TEES</h2>
                    <p class="lead">Free feel to create your own design..</p>
                </div>
              </div>

              <div class="item">
                <img src="image/sliders/slider1.jpg" alt="New York">
                 <div class="carousel-caption" id="sl3">
                    <h2>THE CHOICE IS YOURS</h2>
                    <p class="lead">Browse through our vast varities..</p>
                 </div>
              </div>
            </div>
            <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>
        
        <!-- Images -->
        <div class="container" align="center"><br>
            <div class="col-sm-6">
                <img width="100%" src="image/others/towel-off.jpg">
                <div class="carousel-caption light">
                    <div id="caption" >
                        <p class="lead" style="opacity:1;">TROUSERS</p>    
                        <a href="listproducts.php?category=Pants" class="btn btn-primary " style="background-color: #132853; color : white; border : none">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" align="center">
                <img width="100%" src="image/others/womens-off.jpg">
                <div class="carousel-caption light">
                    <div id="caption" >
                        <p class="lead" style="opacity:1;">SHIRTS</p>    
                        <a href="listproducts.php?category=Shirts" class="btn btn-primary" style="background-color:#132853; color:white; border:none">
				Shop Now
			</a>
                    </div>
                </div>
            </div>
        </div>
	
	<div class="container" align="center"><br>
            <div class="col-sm-6">
                <img width="100%" src="image/others/women-off1.jpg">
                <div class="carousel-caption light">
                    <div id="caption" >
                        <p class="lead" style="opacity:1;">SHOES</p>    
                        <a href="listproducts.php?category=Shoes" class="btn btn-primary " style="background-color: #132853; color : white; border : none">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" align="center">
                <img width="100%" src="image/others/hat-off.jpg">
                <div class="carousel-caption light">
                    <div id="caption" >
                        <p class="lead" style="opacity:1;">Caps</p>    
                        <a href="listproducts.php?category=Caps" class="btn btn-primary" style="background-color:#132853; color:white; border:none">
				Shop Now
			</a>
                    </div>
                </div>
            </div>
        </div>
    
           </div><br>
		<div class="container" >
		<div class="col-sm-6" ><video width="100%" controls><source src="video/video.mp4" ></video></div>
		<div class="col-sm-6"><video width="100%" controls><source src="video/video2.mp4" ></video></div>
		</div><br>
		<?php include('footer.php'); ?>
    </body>
</html>

