<?php

    include("databasecon.php");
    session_start();
    $_SESSION['question']="";
    $_SESSION['email']="";
    if(isset($_SESSION['user'])){
        $username= $_SESSION['user'];
    }else{
        header("Location:login.php");
    }
    $fullname="";
    $password="";
    $email="";
    $postcode="";
    $dob="";
    $address="";
    $query="SELECT * FROM customers WHERE username = '$username'";
    $run=mysqli_query($connection,$query) or die (mysqli_error($connection));
    while($database = mysqli_fetch_array($run))
    {
        $fullname= $database['fullname'];
        $email= $database['email'];
        $postcode= $database['postcode'];
        $dob= $database['dob'];
		$address= $database['address'];
		$password=$database['password'];
		$password=sha1($password);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
		<title><?php echo $username;?></title>
		<link rel="stylesheet" type="text/css" href="ncc.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="background-red">
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
                        <p class="navbar-brand">Air Pollution</p>
                    </div>
                <ul class="nav navbar-nav navbar-light bg-light">
                <li class="active"><a href="index.php" class="color-me">
                    <img src="images/home.svg" width="30" height="20" class="text-dark" alt="index.php">
                        Home</a></li>
                    <li><a href="profile.php" class="color-me">
                    <img src="images/user.svg" width="30" height="20" class="text-dark" alt="profile.php">Profile</a></li>
                    <li><a href="contactus.php" class="color-me">
                    <img src="images/contact-us.svg" width="30" height="20" class="text-dark" alt="contactus.php">Contact Us</a></li>
                    <li><a href="faq.php" class="color-me">
                    <img src="images/question.svg" width="30" height="20" class="text-dark" alt="faq.php">FAQ</a></li>
                    <li><a href="about.php" class="color-me">
                    <img src="images/about.svg" width="30" height="20" class="text-dark" alt="about.php">About</a>
                </ul>
                </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-sm-2">
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
                </div>
    <div class="col-sm-8">
		<table class="table table-dark">
  <thead class="thead-light">
    <tr>
	  <th scope="col-sm-2"><h3>Profile Information</h3></th>
    </tr>
  </thead>
  <tbody>
  <tr class="danger">
      <th scope="row"><img src="images/user.svg" width="30" height="20" class="text-dark">Username:</th>
      <td><?php echo $username;?></td>
    </tr>
    <tr class="success">
      <th scope="row"><img src="images/name.svg" width="30" height="20" class="text-dark">Full Name:</th>
      <td><?php echo $fullname;?></td>
    </tr>
    <tr class="warning">
      <th scope="row"><img src="images/at.svg" width="30" height="20" class="text-dark">Email Address:</th>
      <td><?php echo $email;?></td>
    </tr>
    <tr class="active">
      <th style="width: 30%;" scope="row"><img src="images/address.svg" width="30" height="20" class="text-dark">Address:</th>
      <td><?php echo $address;?></td>
	</tr>
	<tr class="info">
      <th scope="row"><img src="images/post.svg" width="30" height="20" class="text-dark">Post Code:</th>
      <td><?php echo $postcode;?></td>
	</tr>
	<tr class="danger">
      <th scope="row"><img src="images/calendar.svg" width="30" height="20" class="text-dark">Date Of Birth</th>
      <td><?php echo $dob;?></td>
    </tr>
  </tbody>
</table>
                </div>
                </div>

           <div class="container">
           <div class="row">
               <div class="col-sm-6">

            <a class="btn btn-info" role="button" data-toggle="modal" data-target="#profileUpdate">Update your profile?</a>
            <a class="btn btn-danger" href="logout.php" role="button">
				<img src="images/sign-out.svg" width="35" height="20" class="text-dark" alt="">Logout?</a>
			   </div>
			   <br>
               <div class="col-sm-6">
			   <a data-toggle="modal" data-target="#emailUpdates"><img src="images/updates.png" class="logo"></a>	
			</div>

               </div>
          
<div class="modal fade" id="profileUpdate" tabindex="-1" aria-labelledby="profileUpdate" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="profileUpdate">Update Profile Information</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="profileedit.php" method="post">
  <div class="form-group">
    <label><img src="images/name.svg" width="30" height="20" class="text-dark">Full Name</label>
    <input type="text" value="<?php echo $fullname;?>" class="form-control" id="fullname" name="fullname">
  </div>
  <div class="form-group">
    <label><img src="images/at.svg" width="30" height="20" class="text-dark">Email address</label>
    <input type="email" value="<?php echo $email;?>" class="form-control" id="email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label><img src="images/key.svg" width="30" height="20" class="text-dark">Password</label>
	<input type="password" class="form-control" name="password" id="password">
	<small id="emailHelp" class="form-text text-muted">Fill in new password,leave blank to continue using old password.</small>
  </div>
  <div class="form-group">
    <label><img src="images/address.svg" width="30" height="20" class="text-dark">Address</label>
    <input type="text" value="<?php echo $address;?>" class="form-control" id="address" name="address">
  </div>
  <div class="form-group">
    <label><img src="images/post.svg" width="30" height="20" class="text-dark">Post Code</label>
	<input type="text" value="<?php echo $postcode;?>" class="form-control" id="postcode" name="postcode">
	<div class="form-group">
    <label><img src="images/calendar.svg" width="30" height="20" class="text-dark">Date Of Birth</label>
    <input type="text" value="<?php echo $dob;?>" class="form-control" id="dob" name="dob">
  </div>
  </div>
  <button type="submit" name="profile_edit" class="btn btn-success">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
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
