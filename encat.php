<?php include("adnav.php")?>

<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<style type="text/css">
		.card2
		{
		 background-color:mistyrose;
  		 padding: 20px;
  		 margin-top:150px;
  		 width:600px;
  		}
	</style>
</head>
<body>



<center><div class="card2">
<form>
<table>
<tr><td><h3>Enter Your Blog Value:&nbsp;&nbsp;</h3></td><td><input type="text" name="value" class="input" style="height: 30px;"></td></tr>
<tr ><td><h3>Enter Category:</h3></td>
<td><input type="text" name="cat" class="input" style="height: 30px;"></td>
</tr>
<tr><td><button name="submit">Submit</button></td></tr>
</table>
</form>
</div></center>

<div class="footer" style="margin-top:150px;"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
$value=$_REQUEST['value'];
$cat=$_REQUEST['cat'];
$con=$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$query="insert into category (value,category) values ('$value','$cat')";
$res=mysqli_query($con,$query);
if($res>0)
{
	 echo"<script>alert('Category Added Successfully')</script>";
}
else
{
	 echo"<script>alert('Error Encountered')</script>";
}
}
?>
