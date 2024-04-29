<?php include("anav.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<style type="text/css">
		body
		{
			background-color:#FFDEAD;
		}
		.card
		{
			width:80%;
			height:700px;
			margin-left:160px;
			margin-top:50px;
			box-shadow:5px 5px 5px 2px black;
			border:1px solid black;
			border-radius:15px;
		}
		.box
		{
			font-size:16px;
			background:white;
			width:350px;
			height:50px;
	
		}
		.input 
		{
			width:498px;
			height:50px;
			font-size:20px;
			font-family: Playfair Display;

		}
		
		button
		{
			width:250px;
			height:60px;
			font-size:20px;
			font-family: Playfair Display;
			float: right;
			margin-right:23px;

		}
		

		label:hover
		{
		background-color:#ddd;
		color:purple;
		}
		.div
		{
		background-color:white;
		width: 1000px;
		height: 50px;
		border:1px solid black;
		margin-left:23px;

		}
		.browse
		{
		color:white;
		float: right;
		font-size:20px;
		height:50px;
		border:1px solid black;
		border-radius:1px;
		background-color: #4C4A48;	
		}
		input:focus
	  {
	  background-color:lightgrey;
	  transition:0s;
	  color:black;
	  box-shadow: 1px 1px 1px white;
	  }
	</style>
	</style>
</head>
<body >
<?php
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$query="select * from registration where username='$user'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$status=$row[10];
if($status=='allowed')
{
echo'<div class="card">
<center><img src="images/b.png" style="width:100px;height:100px;margin:10px;"></center>
	<form method="post" enctype="multipart/form-data" onsubmit="return validation()" action="uploadconf.php" >
	<center><table  width="1050px" height="500px">

			<tr>
				<th><input type="number" placeholder="Blog-Id" class="input" required name="srno">&nbsp;<input type="text" placeholder="Display-Name" class="input" required="required" name="dn"></th>
				
			</tr>

			<tr>
				<th><input  type="text" placeholder="Category"class="input"required name="cat">
				<input  type="text" placeholder="Title"class="input"required name="tit"></th>
			</tr>
			<tr>
				<th>
				<div class="div">
			<span style="opacity:0.5;font-size:20px;float:left;font-family:Playfair Display;">Title-Pic</span>
					<input type="file" id=box style="display:none;" name="photo">
					<label for=box class="browse">Browse</label>
					</div></th>
				</tr>
			<tr>
				<th colspan="2"><textarea style="width:1000px;height:100px;font-size:20px;" name="ste" id="stext" placeholder="Preview-Text"required></textarea> </th>		
			</tr>

			<tr>
				<th colspan="2"><textarea  style="width:1000px;height:200px;font-size:20px;" name="wte" id="wtext" placeholder="Whole-Text"required></textarea> </th>
			</tr>
				<tr>

				<th colspan="2"><button type="submit" name="submit" value="submit">Submit</button></th>
			</tr>
				</table></center>
		
	
	</form>
	
</div>
<div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
<script type="text/javascript">
	function validation()
	{
		var stext = document.getElementById("stext").value;
		var wtext = document.getElementById("wtext").value;
		
		
		if((stext.length<200)||(stext.length>4000))
		{
			 document.getElementById("stext");
			 alert("** Length Should be b/w 200 to 4000 Words");
			 return false;
		}
		if((wtext.length<4000))
		{
			 document.getElementById("wtext");
			 alert("** Length Should Be Greater than 4000 Words");
			 return false;
		}
	}
</script>
</body>
</html>';
}
else
{
	header("location:userhome.php?message=This_Feature_Is_Locked");
}
?>

