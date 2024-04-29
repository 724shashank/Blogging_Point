<?php
$user=$_REQUEST['id'];
session_start();
$_SESSION['status']=$_REQUEST['stat'];
$status=$_SESSION['status'];
$con= mysqli_connect("127.0.0.1","root","","blog_portal");
$q1="update registration set status='$status' where username='$user'";
$res=mysqli_query($con,$q1);
if($res>0)
{
header("location:verifyuser.php");
}
?>
