<?php
include("databasecon.php");
session_start();
$question=$_SESSION['question'];
$email=$_SESSION['email'];
$dbdate = date("Y-m-d");
$sql="INSERT INTO questions(question,email,postDate)VALUES('$question','$email','$dbdate')";
$execute =mysqli_query($connection,$sql) or die (mysqli_error($connection));
if($execute){
$redirect=$_SERVER["HTTP_REFERER"];
echo '<script type="text/javascript">alert("Submission Sucessful")</script>';
header("Refresh:0; url='$redirect'");
}
?>
