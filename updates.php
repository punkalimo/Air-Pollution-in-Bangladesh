<?php
session_start();
include("databasecon.php");
if(isset($_POST['subscribe'])){
$email=$_POST["email"];
$sql="INSERT INTO emailUpdates(email_Address) VALUES ('$email')";
$run=mysqli_query($connection,$sql) or die(mysqli_error($connection));
if($run){
    $redirect=$_SERVER["HTTP_REFERER"];
    echo '<script type="text/javascript">alert("Submission Sucessful")</script>';
    header("Refresh:0; url='$redirect'");
}
else{
    echo '<script type="text/javascript">alert("error")</script>';
}}?>