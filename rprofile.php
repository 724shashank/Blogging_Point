<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
.body {
  padding: 10px;
  background: url(Images/b4.jpg);
  background-repeat: no-repeat;
  background-size: 1920px 1965px;
  font-family: 'Playfair Display', serif;
  font-size:20px;
}
/* Header/Blog Title */
.header {
  padding:30px;
  text-align: center;
  background: #4C4A48;
  height:200px;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:20px;
  }
/* Change color on hover */
.topnav  a:hover {
  background-color: #ddd;
  color: purple;
  font-size:20px;
}
  
.footer {
  /*padding:1px;*/
  padding: 20px;
  text-align: center;
  background: #333;
  margin-top: 20px;
  color: white;
}
        
/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body class="body">
<div class="topnav">
  <a href="ureview.php">Back</a>
</div>
  <?php
  session_start();
  $user=$_SESSION['user'];
  $con=mysqli_connect("127.0.0.1","root","","blog_portal");
  $sql="select * from registration where username='$user' ";
  $res=mysqli_query($con,$sql);

  if($row=mysqli_fetch_array($res))
  {
    $user=$row[0];
    $name=$row[1];
    $state=$row[3];
    $city=$row[4];
    $address=$row[5];
    $dob=$row[6];
    $mobile=$row[7];
    $utype=$row[8];
    $status=$row[10];  
    
        echo"<center><table width=600 height=600 style='background-color:#FFDEAD;font-size:20px;margin-top:10px;box-shadow:5px 5px 5px 2px black;'>";
        echo"<tr><td colspan=2 style='text-align:center;font-size:30px;background-color:#333;color:white;'><b><u>User-Profile</u></b></td></tr>";
        echo"<tr><td><b>Email/Username:</b></td><td>$user</td></tr>";
        echo"<tr><td><b>Name:</b></td><td>$name</td></tr>";
        echo"<tr><td><b>State:</b></td><td>$state</td></tr>";
        echo"<tr><td><b>City:</b></td><td>$city</td></tr>";
        echo"<tr><td><b>Address:</b></td><td>$address</td></tr>";
        echo"<tr><td><b>Date-or-Birth:</b></td><td>$dob</td></tr>";
        echo"<tr><td><b>Mobile:</b></td><td>$mobile</td></tr>";
        echo"<tr><td><b>User-Type:</b></td><td>$utype</td></tr>";
        echo"<tr><td><b>Status:</b></td><td>$status</td></tr>";
        echo"</table></center>";  
        }
        ?>
        <div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>    
</body>
</html>


