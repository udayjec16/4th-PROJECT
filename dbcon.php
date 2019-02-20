<?php
$servername="localhost";
$username="root";
$password="";
$dname="project";
$conn=mysqli_connect($servername,$username,$password,$dname);
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
//echo"connected successfully";
?>


