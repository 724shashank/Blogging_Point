<?php include('anav.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		.card2
		{
		 background-color:mistyrose;
  		 padding: 20px;
  		 margin-top:50px;
  		 width:1200px;
  		 margin-left:150px;
  		}
  		.button
{
  width:100px;
  height:50px;
  background-color: #333;
  color:white;
  font-size:15px;

}
.button:hover
{
  background-color: #ddd;
  color: purple;
}
	</style>
</head>
<body>

<div class='card2'>

<?php
$_SESSION['id']=$_REQUEST['id'];
$id=$_SESSION['id'];
$opr=$_REQUEST['opr'];
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$q="select * from blog where id='$id' AND blogby='$user'";
if($opr=='edit')
{
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
$title=$row[3];
$stext=$row[6];
$wtext=$row[7];
		echo"<form action='update.php'>";
        echo"<center><table width=700 height=500 >";
        echo"<tr><td style='font-size:20px;'colspan=4><h1><u>Edit-Blog</u></h1><td><tr>";
        echo"<tr><td colspan=2>Title</td><td colspan=2><input type='text' value='$title' name='title' class=input></td></tr>";
        echo"<tr><td colspan=2>Preview</td><td colspan=2><textarea style='width:1000px;height:100px;font-size:20px;' name='ste' placeholder='Preview-Text'>".$stext."</textarea></td></tr>";
        echo"<tr><td colspan=2>Whole-Text</td><td colspan=2><textarea style='width:1000px;height:200px;font-size:20px;' name='wte' placeholder='Preview-Text'>".$wtext."</textarea></td></tr>";
        echo"<tr><td><input type='submit' name='upd' class=button ></td></tr>";
        echo"</table></center></form>";

}
else
	{
	
$q2="delete from blog where id='$id' AND blogby='$user'";
$res=mysqli_query($con,$q2);
        if($res>0)
        {
            header("location:userhome.php?msg=Blog-Deleted");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }

    }

    
?>
	
</div>
<div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body></html>