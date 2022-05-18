<?php
include("databasecon.php");
session_start();
if(isset($_SESSION['user'])){
    $username= $_SESSION['user'];
        };
?><!DOCTYPE html>
<html>
    <head> 
        <meta charset='utf-8'/>
		<title>Home</title>
		<!--bootstrap integration -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="ncc.css"/>
    </head>
    <body>
          <div class="container"> 
        <div class="jumbotron">
                <h1 >Air Pollution in Bangladesh</h1>
                <p class="text-muted">Among the world’s megacities of 10 million people or more,
                     the annual average PM2.5 concentration in Dhaka’s air in 2019 
                     was 83.3 microgrammes per cubic metre </p>
                
        </div>
        <h2 id="city" class="location"></h2>
    </div>
                
            <div class="navbar navbar-light bg-primary justify-content-center">
             <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <P>Air Pollution</P>
                        </div>
                    </div>
                    <ul class="nav navbar-nav navbar-light bg-light" >
                    <li class="active"><a href="index.php" class="color-me">
                    <img src="images/home.svg" width="30" height="20" class="text-dark" alt="index.php" >
                        Home</a></li>
                        <li><?php 
                    if(isset($_SESSION['user'])){
                        $username= $_SESSION['user'];
                        echo "<a href='profile.php' class='color-me'><img src='images/user.svg' width='30' height='20' class='text-dark' alt='profile.php'>Profile</a>";
                           }; 
                    ?>
                    <?php
                    if(!isset($_SESSION['user'])){
                        echo "<li><a href='login.php' class='color-me'><img src='images/sign-in.svg' width='30' height='20' class='text-dark' alt='profile.php'>Login</a></li>";
                        echo "<li><a href='reg.php' class='color-me' data-toggle='tooltip' data-placement='top' title='Signup NOW and get a free home testing kit!'><img src='images/outbox.svg' width='30' height='20' class='text-dark' alt='profile.php'>Signup</a></li>";
                    };
                    ?>
                    <li><a href="contactus.php" class="color-me">
                    <img src="images/contact-us.svg" width="30" height="20" class="text-dark" alt="contactus.php">
                        Contact Us</a></li>
                    <li><a href="faq.php" class="color-me">
                    <img src="images/question.svg" width="30" height="20" class="text-dark" alt="faq.php">
                    FAQ</a></li>
                    
                    <li><a href="about.php" class="color-me">
                    <img src="images/about.svg" width="30" height="20" class="text-dark" alt="about.php">
                        About</a>
                    </li>
                    
                </ul>
              </div>
            </div>
            <div class="container justify-content-center">
            <div class="col">
            <h3>We are a website that talks about air pollution and the dangers its has over our enviroment.</h3>
            <p>Air pollution is a mixture of solid particles and gases in the air. Car emissions, chemicals from factories, dust, pollen and mold spores may be suspended as particles.
             Ozone, a gas, is a major part of air pollution in cities. When ozone forms air pollution, it's also called smog.</p>
             <br>
             <p>For more information or questions please don't hesitate to contact us through our Contact us page.</p>
             <h4>Click on the "Sign up for updates" button to recieve automatic updates and information about air pollution and never miss anything</h4>
            </div>
            </div>
            <script>
                 $(function(){
                 $('[data-toggle="tooltip"]').tooltip()
                    });
                 $.ajax({
				url:"https://geolocation-db.com/jsonp",
				jsonpCallback:"callback",
				dataType:"jsonp",
				success: function(location){
					$('#city').html(location.city);
					
				}
			});
            </script>
            <footer>
                <p class="mt-5 mb-3 text-muted text-center ">All rights reserved &copy; 2020</p>
                </footer>
    </body>
</html>