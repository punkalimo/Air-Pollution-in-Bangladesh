<?php
$server="localhost";
$user="root";
$password="";
$db="00187767";
$connection=mysqli_connect($server,$user,$password) or die
("Could not connect");
$database=mysqli_select_db($connection,$db) or die (mysqli_error($connection));
?>