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
            <div class="container">
                <div class="row">
                <div class="col-sm-4">
                <h2 class="lead">Air pollution far deadlier than coronavirus </h2>
                <p>Air pollution is the world's leading environmental health threat,
                While the new coronavirus is dominating international headlines, 
                a silent killer is contributing to nearly seven million more deaths a year
                Air pollution continues to pose one of the biggest threats to human health,
                 with nearly 90 percent of the global population breathing air that
                  exceeds World Health Organisation exposure targets
                </p>
                <img src="images/led.jpg" width="100%" height="40%">
                </div>
                <div class="col-sm-8">
                <video controls autoplay loop width="100%">
                <source src="videos/video.mp4" type="video/mp4"/>
                This browser does not support video playback
                </video>
                <br>
                <a href="https://www.who.int/health-topics/air-pollution#tab=tab_1"><img src="images/who.jpg" class="col-xs-2 logos">
                </a>
                 <a href="https://www.niehs.nih.gov/health/topics/agents/air-pollution/"><img src="images/2012.png" class="logos"></a>
                 <a data-toggle="modal" data-target="#emailUpdates"><img src="images/updates.png" class="logo"></a>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-6">
                <h2 class="lead">Bangladesh air worst in the world</h2>
                <small id="emailHelp" class="form-text text-muted">Says 2019 World Air Quality Report</small>
                <img src="images/bhadra.jpg" width="100%" height="50%">
                </div>
                <div class="col-sm-6">
                    <br>
                    <h4 class="lead">However, Dhaka was second worst among capital cities..</h4>
                    <small id="emailHelp" class="form-text text-muted">Bangladesh's air quality was the worst in the world also in 2018.
                    </small>
                    
                <img src="images/bang.jpg" width="100%"  height="50%">
                    </div>
                </div>
                </div>
                <div class="modal fade" id="emailUpdates" tabindex="-1" role="dialog" aria-labelledby="callAction" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="callAction">Signup For Updates</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="updates.php" method="POST">
					<div class="form-group">
						<label>Email Address:</label><br>
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						<input type="text" class="form-control" name="email" placeholder="email address" required>
						<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button name="subscribe" type="submit" class="btn btn-primary submitBtn">Sign Up</button>
				</div>
					</div>
					</form>
				</div>
				
				</div>
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