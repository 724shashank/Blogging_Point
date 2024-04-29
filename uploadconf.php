<?php
if(isset($_REQUEST["submit"]))
{
$bid=$_REQUEST['srno'];
$dn=$_REQUEST['dn'];
$group=$_REQUEST['cat'];
$title=$_REQUEST['tit'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder="images/".$filename;
move_uploaded_file($tempname,$folder);
$stext=$_REQUEST['ste'];
$wtext=$_REQUEST['wte'];
session_start();
$user=$_SESSION['user'];

$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$q1="insert into blog(id,dname,category,title,date,image,stext,wtext,blogby)values('$bid','$dn','$group','$title',curdate(),'$folder','$stext','$wtext','$user')";
$res1=mysqli_query($con,$q1);
if($res1>0)
{

 header('location:userhome.php');
}
}
?>
