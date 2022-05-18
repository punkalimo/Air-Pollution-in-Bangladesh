<?php
        include("databasecon.php");
        session_start();
        $message="";
        $leftTrial="";
        function getIpAddr(){
            if (!empty($_SERVER['HTTP_CLIENT_IP'])){
               $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
            }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
               $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }else{
               $ipAddr=$_SERVER['REMOTE_ADDR'];
            }
           return $ipAddr;
        }
        
        if(isset($_POST['submit']))
        {   
            $time=time()-600;
            $ip_address=getIpAddr();
            $run="SELECT count(*) as totalCount FROM loginlimit WHERE loginTime > $time AND ipAddress='$ip_address'";
            $query=mysqli_query($connection,$run);
            $loginRow=mysqli_fetch_assoc($query);
            $totalCount=$loginRow['totalCount'];
            if($totalCount==3){
                $message='<script type="text/javascript">alert("Account Locked Try After Ten(10) Minutes")</script>';}
                else{
            $username=$_POST["username"];
            $password=$_POST["password"];
            $password=sha1($password);
            
            $sql="SELECT * FROM customers WHERE username='$username' AND password='$password'";
            $checkusername="SELECT * FROM customers WHERE username='$username'";
            $runcheck=mysqli_query($connection,$checkusername) or die (mysqli_error($connection));
            $run=mysqli_query($connection,$sql) or die (mysqli_error($connection));
            $userroll=mysqli_num_rows($runcheck);
            $rollnum=mysqli_num_rows($run);
            if($rollnum>0)
            {
                $_SESSION['user']=$username;
                $message='<script type="text/javascript">alert("Login Succesfully")</script>';
                $delete="DELETE FROM loginlimit WHERE ipAddress='$ip_address'";
                $eraseDetails=mysqli_query($connection,$delete) or die (mysqli_error($connection));
                header("location: profile.php");
                
            }
            else{
                $totalCount++;
                $leftTrial=3-$totalCount;
                if($userroll==0){
                    $message='<script type="text/javascript">alert("Incorrect Username, Please Register")
                    </script>';
                }else{
                $message= '<script type="text/javascript">alert("Incorrect Username,Password Combination ")
                </script>';} 
            }
            $timeTry=time();
            $timeLog="INSERT INTO loginlimit (ipAddress,loginTime) VALUES ('$ip_address','$timeTry')";
            $insert=mysqli_query($connection,$timeLog) or die (mysqli_error($connection));
            }
           
    }
    
        ?>
<!DOCTYPE html>
<html>
    <head> 
        <meta charset='utf-8'/>
		<title>Login</title>
		<!--bootstrap integration -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
        <link rel="stylesheet" type="text/css" href="ncc.css"/>
    </head>
    <body class="text-center">
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
           <div class="container">
                <div class="row">
                    <div class="col-sm-6">
            <form class="box" method="post" action="" id="loginForm">
                <div class="form-group">
            <h1>Login</h1>
            <label><img src="images/user.svg" width="30" height="20" class="text-dark">Username</label>
            <input type="text" name="username" placeholder="username" required class="form-control">
            <label><img src="images/key.svg" width="30" height="20" class="text-dark">Password</label>
            <input type="password" name="password" placeholder="password" required class="form-control">
            <br><?php 
                    if(strlen($message)==89){
                        
                        echo
            '<small id="emailHelp" class="form-text text-muted"> (3)Three Wrong Attempts Have Been Entered,Wait For (10)Minutes</small>';
            echo $message;
            ;
        }
            else{
            echo '<button class="btn btn-primary" type="submit" id="loginForm" value="submit" type="submit" name="submit">
            <img src="images/sign-in.svg" width="35" height="20" class="text-dark" alt="">Login</button>';
            echo $message;}?>
        
            <a class="btn btn-success" href="reg.php" role="button" data-toggle="tooltip" data-placement="right" title="Signup and get a free home testing kit!"><img src="images/outbox.svg" width="30" height="20" class="text-dark" alt="reg.php">Signup</a>
            
                </div>
            </form> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <a href="https://www.who.int/health-topics/air-pollution#tab=tab_1"><img src="images/who.jpg" class="col-xs-2 logos"></a>
                 <a href="https://www.niehs.nih.gov/health/topics/agents/air-pollution/"><img src="images/2012.png" class="col-xs-2 logos"></a>

                    </div>
                    <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#emailUpdates"><img src="images/updates.png" class="logo"></a>
                    </div>
                </div>
            </div>
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