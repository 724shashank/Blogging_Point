<?php include("adnav.php")?>
   <!DOCTYPE html>
   <html>
   <head>
    <title>User-Info</title>
   
   </head>
   <body>
<center>
 <div class="div1"  style="overflow-y:scroll;">
<h1 style="text-align: center;background-color:#4C4A48;color:white;"><u>Users-Profile</u></h1>
    <table border="1px" width="1080" cellspacing="0px" cellpadding="5px">
        
        <tr style="background-color: #333;color: white;">
            <td>Username/Email</td>
            <td>Name</td>
            <td>State</td>
            <td>City</td>
            <td>Address</td>
            <td>Date-of-Birth</td>
            <td>Mobile</td>
            <td>Usertype</td>
            <td>Photo</td>
        </tr>
               
        <?php
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$query="select * from registration ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
    $user=$row[0];
    $name=$row[1];
    $state=$row[3];
    $city=$row[4];
    $address=$row[5];
    $dob=$row[6];
    $mobile=$row[7];
    $usertype=$row[8];
    $photo=$row[9]; 
echo"<tr><td>".$user."</td><td>".$name."</td><td>".$state."</td><td>".$city."</td><td>".$address."</td><td>".$dob."</td><td>".$mobile."</td><td>".$usertype."</td><td><a href='$photo'><img src='".$photo."'height='100'width='100' ></a></td><a href='$photo'></a></td></tr>";
}
?>
</table>
</div>
</center>
<div class="footer" style="margin-top:80px;"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>        
