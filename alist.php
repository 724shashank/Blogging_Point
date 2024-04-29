<?php include("rnav.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Check-Review</title>
	<style type="text/css">
		.div2
       {
        width:550px;
        height:500px;
        background-color:mistyrose; 
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px;

       }
	</style>
</head>
<body>
<center><div class="div2" style="overflow-y:scroll;">
  
    <table style="font-size:20px;text-align:justify;width:530px;"border=1>
           <tr><td colspan="4" style="text-align:center;font-size:50px;background-color: #4C4A48;color:white;height:100px;"><b>**Aurther**</b></td></tr>
            <tr style="background-color:#333;color:white;"><td>Author-Name</td><td>Username</td></tr>
            
       
            <?php
            $con=mysqli_connect("127.0.0.1","root","","blog_portal");
            $sql="select registration.name,registration.username from registration where utype='author'"; 
            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($res))
            {
                echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
            }

            ?>
            </table>
	    	</div>
            <div class="footer"> 
           <h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
            </div>
			</center>
			</body>
			</html>