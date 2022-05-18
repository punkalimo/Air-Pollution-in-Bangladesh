<?php
    include("databasecon.php");
    session_start();
    if(isset($_SESSION['user'])){
        $username= $_SESSION['user'];
    }else{
        header("Location:login.php");
    }
        //profile update 
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $fullname=$_POST["fullname"];
                $postcode=$_POST["postcode"];
                $email=$_POST["email"];
                $address=$_POST["address"];
                $dob=$_POST["dob"];
                $password=$_POST["password"];
                $passwordEncrypted=sha1($password);
                if(!empty($_POST['password'])){
                $insert0= "UPDATE customers SET password='$passwordEncrypted' WHERE username ='$username'";
                $exec=mysqli_query($connection,$insert0) or die (mysqli_error($connection));}
                $insert= "UPDATE customers SET fullname='$fullname' WHERE username ='$username'";
                $exec=mysqli_query($connection,$insert) or die (mysqli_error($connection));
                $insert1= "UPDATE customers SET postcode='$postcode' WHERE username ='$username'";
                $exec=mysqli_query($connection,$insert1) or die (mysqli_error($connection));
                $insert2= "UPDATE customers SET email='$email' WHERE username ='$username'";
                $exec=mysqli_query($connection,$insert2) or die (mysqli_error($connection));
                $insert3= "UPDATE customers SET address='$address' WHERE username ='$username'";
                $exec=mysqli_query($connection,$insert3) or die (mysqli_error($connection));
                $insert4= "UPDATE customers SET dob='$dob' WHERE username ='$username'";
                $exec=mysqli_query($connection,$insert4) or die (mysqli_error($connection));
                header("Location:profile.php");
            }
            ?>