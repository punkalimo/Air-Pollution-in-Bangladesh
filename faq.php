<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$_SESSION['question']=$_POST['question'];
$_SESSION['email']=$_POST['email'];}
if(isset($_SESSION['user'])){
$username= $_SESSION['user'];
    };
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'/>
		<title>Faq</title>
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
                        <p class="navbar-brand">Air pollution</p>
                    </div>
                    <ul class="nav navbar-nav navbar-light bg-light" >
                    <li class="active"><a href="index.php" class="color-me">
                    <img src="images/home.svg" width="30" height="20" class="text-dark" alt="index.php">
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
               <div class="col-sm-6">
               <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        What is air pollution?
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                    Air pollution means the presence of one or more unwanted 
                    substances in air. Air pollutants have a negative impacts
                     on humans, animals and plants, and on air quality.
                    The most frequently present categories of air pollutants are
                     sulphur oxides, nitrogen oxides, Volatile Organic Compounds (VOC) 
                     and small dust particles (aerosols).
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                        How does air pollution form?
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                    Air pollution can form in various ways. Chemicals are emitted during many different
                     human activities. In the atmosphere these chemicals can react with other chemicals 
                     to more dangerous substances. Air pollutants often have properties that are harmful to the environment.
                     The weather plays an important role in the formation and disapearance of air pollution.
                     This is mainly influenced by wind and temperatures. Air pollutants can be transported by wind,
                     causing a pollution to spread widely. Rain can remove pollutants from air,
                    causing soil and water pollution.
                     Sunlight can aid the convertion of air pollutants to different substances.


                     Chemicals can come from various sources, and are formed during different processes. 
                     
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
                        What types of air pollution are there?
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse in">
                    <div class="panel-body">
                    Air pollution consists of gases and/ or particles. 
                    These have a distinct chemical or physical structure, or a distinct effect on human health.
                    <h4>The main air contaminants are:</h4>
                    <ul>
                        <li>Sulphur dioxide (SO2).</li>
                        <li>Nitrogen oxides (NOx).</li>
                        <li> Ammonia (NH3)</li>
                        <li>Carbon monoxide (CO).</li>
                        <li>Radioactive radiation</li>
                    </ul>
                     
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
                        How to Wear Masks?
                        </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse in">
                    <div class="panel-body">
                    Masks are an additional step to help slow the spread of Airborn diseases caused by
                    Air contamination such as COVID-19 when combined with every day preventive actions
                    <h4>Wear your Mask Correctly by</h4>
                    <ul>
                        <li>Wash your hands before putting on your mask</li>
                        <li>Put it over your nose and mouth and secure it under your chin</li>
                        <li> Try to fit it snugly against the sides of your face</li>
                        <li>Make sure you can breathe easily</li>
                        <img src="images/fm.png">
                    </ul>
                     
                    </div>
                </div>
            </div>
        </div>
               </div>
               <div class="col-sm-4">
               <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            echo "<small id='emailHelp' class='form-text text-muted'>Click here to submit question.</small>";
            echo "<br> <a class='btn btn-primary btn-lg' href='submit.php' role='button'>Submit</a>";
        }
        ?> 
        
               </div>
               <div class="col-sm-2">
               <a href="profile.php"><img src='images/user.svg' width='30' height='30' class='text-dark' alt='profile.php'><br>Back to profile if question
            is answered</a>
            <br>
            <a data-toggle="modal" data-target="#emailUpdates"><img src="images/updates.png" class="logo"></a>
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