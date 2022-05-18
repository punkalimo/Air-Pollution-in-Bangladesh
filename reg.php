<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
		<title>Registration</title>
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
                        <p class="navbar-brand">AirPop</p>
                    </div>
                <ul class="nav navbar-nav navbar-light bg-light">
                <li class="active"><a href="index.php" class="color-me">
                    <img src="images/home.svg" width="30" height="20" class="text-dark" alt="index.php">
                        Home</a></li>
                    <li><a href="login.php" class="color-me">
                    <img src="images/sign-in.svg" width="30" height="20" class="text-dark" alt="login.php">Login</a></li>
                    <li><a href="reg.php" class="color-me" data-toggle='tooltip' data-placement='top' title='Signup NOW and get a free home testing kit!'>
                    <img src="images/outbox.svg" width="30" height="20" class="text-dark" alt="reg.php">Signup</a></li>
                    <li><a href="contactus.php" class="color-me">
                    <img src="images/contact-us.svg" width="30" height="20" class="text-dark" alt="contactus.php">Contact Us</a></li>
                    <li><a href="faq.php" class="color-me">
                    <img src="images/question.svg" width="30" height="20" class="text-dark" alt="faq.php">FAQ</a></li>
                    <li><a href="about.php" class="color-me">
                    <img src="images/about.svg" width="30" height="20" class="text-dark" alt="about.php">About</a>
                </ul>
                </div>
                </div>
         <div class="container text-center">
             <div class="row justify-content-center">
                 <div class="col-sm-2">
                 </div>
                 <div class="col-sm-6 text-center">
            <form class="box" method="POST" action="">
                <div class="form-group">
            <label><img src="images/name.svg" width="30" height="20" class="text-dark">Full Name</label>
            <input type="text" name="fullname" placeholder="Enter full name" required class="form-control">
            <label><img src="images/user.svg" width="30" height="20" class="text-dark">Username</label>
            <input type="text" name="username" placeholder="Enter username" required class="form-control">
            <label><img src="images/at.svg" width="30" height="20" class="text-dark">Email address</label>
            <input type="email" name="email" placeholder="Enter email" required class="form-control">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <br>
            <label><img src="images/key.svg" width="30" height="20" class="text-dark">Password</label>
            <input type="password" name="password" placeholder="Password" required class="form-control">
            <label><img src="images/address.svg" width="30" height="20" class="text-dark">Address</label>
            <input type="text" name="address" placeholder="Enter address" required class="form-control">
            <label><img src="images/post.svg" width="30" height="20" class="text-dark">Post code</label>
            <input type="text" name="postcode" placeholder="Enter postcode" required class="form-control">
            <label><img src="images/calendar.svg" width="30" height="20" class="text-dark">Date of birth</label>
            <input type="text" name="dob" placeholder="Date of birth:dd/mm/yy" required class="form-control">
            <br>
            <input type="submit" value="Register" class="btn btn-success">
            <a class="btn btn-primary" href="login.php" role="button"><img src="images/sign-in.svg" width="35" height="20" class="text-dark" alt="">Member? login</a>
                </div>
            </form>
                 </div>
             </div>
         </div>
        <?php
include('databasecon.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fullname=$_POST["fullname"];
    $username=$_POST["username"];
    $postcode=$_POST["postcode"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $dob=$_POST["dob"];
    $password=$_POST["password"];
    $password=sha1($password);
    $sqli="SELECT * FROM customers WHERE username='$username'";
    $ran=mysqli_query($connection,$sqli) or die (mysqli_error($connection));
    $rollnum=mysqli_num_rows($ran);
    if($rollnum>0){
        echo '<script type="text/javascript">alert("Registration Failled! Username Already Taken!")</script>';}
        else{
    $sql="INSERT INTO customers(fullname,email,password,address,postcode,
        dob,username) VALUES ('$fullname','$email','$password','$address','$postcode',
        '$dob','$username')";
    if(mysqli_query($connection,$sql)){
        echo '<script type="text/javascript">alert("Registration Succesfull")</script>';
        header("location:login.php");
    } else{
        echo '<script type="text/javascript">alert("Registration Failled!")</script>';
    }}
}
?>
            <script>
              $(function () {
                 $('[data-toggle="tooltip"]').tooltip()
                    })
          </script>
          <footer>
                <p class="mt-5 mb-3 text-muted text-center ">All rights reserved &copy; 2020</p>
                </footer>
    </body>
</html>