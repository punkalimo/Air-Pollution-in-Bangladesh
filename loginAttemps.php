<?php
include("databasecon.php");
$ip = $_SERVER['REMOTE_ADDR']; //getting the IP Address
$t=time(); //Storing time in variable
$diff = (time()-120); // Here 600 mean 10 minutes 10*60
mysqli_query($connection, "INSERT INTO tbl_loginLimit VALUES (null,'$ip','$t')"); //Insert Query
$result = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_loginLimit WHERE ipAddress LIKE '$ip' 
          AND timeDiff > $diff"); //Fetching Data 
$count = mysqli_fetch_array($result);
?>