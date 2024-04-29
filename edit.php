<?php
include('anav.php');
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$q="select * from blog where blogby='$user'";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if($row>0)
{
echo'<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		.card2
		{
		 background-color:mistyrose;
  		 padding: 20px;
  		 margin-top:50px;
  		 width:600px;
  		}
	</style>
</head>
<body>

<center><div class="card2">
<form action="editconf.php">
<table>
<tr><td><h3>Enter Your Blog ID:&nbsp;&nbsp;</h3></td><td><input type="number" name="id" class="input" style="height: 30px;"></td></tr>
<tr ><td><h3>Choose Operation:</h3></td>
<td>Edit<input type="radio" name="opr" value="edit"></td>
<td>Delete<input type="radio" name="opr" value="delete"></td>
</tr>
<tr><td><button name="submit">Submit</button></td></tr>
</table>
</form>
</div></center>

<div class="footer" style="margin-top:80px;"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div></body></html>';
}
else
{
	header("location:userhome.php?message=You Can't Do That");
}
?>

