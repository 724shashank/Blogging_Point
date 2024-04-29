<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
 padding: 10px;
  background: url(Images/b4.jpg);
  background-repeat: no-repeat;
  background-size: 1920px 1965px;
  font-family: 'Playfair Display', serif;
  font-size:20px;

}

/* Header/Blog Title */
.header {
  padding: 30px;
 
  background: lightgrey;
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
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: ;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color:mistyrose;
  padding: 20px;
  margin-top:20px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #333;
  margin-top: 20px;
  color: white;
}
.input
{
  width:100%;
  height:50px;
  font-size:20px;
  font-family: Playfair Display;

}

button
{
  width:100px;
  height:50px;
  background-color: #333;
  color:white;
  font-size:15px;

}
button:hover
{
  background-color: #ddd;
  color: purple;
}
input:focus
  {
  background-color:lightgrey;
  transition:0s;
  color:black;
  box-shadow: 1px 1px 1px white;
  }

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
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
<body>

<div>
  <h1><img src="images/b11.png" width="100" height="100" >
    <img style="float:right;margin-top:70px;" src="images/social.png" width="100" height="30" >
  </h1>

 
  
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="registration.php">Registration</a>
  <a href="alogin.php">Author-Login</a>
  <a href="contactus.php">Contact</a>
  <a href="aboutus.php" style="float:right">About-Site</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div style="overflow-y:scroll;height:976px;">
      <?php

      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q1="select blog.dname,blog.title,blog.date,blog.image,blog.stext,blog.id from blog";
      $res=mysqli_query($con,$q1);
      
      while($row=mysqli_fetch_array($res))
      {
        $dname=$row[0];
        $title=$row[1];
        $date=$row[2];
        $image=$row[3];
        $stext=$row[4];
        

     echo "<h2>".$title."</h2>";
     echo "<h5>".$date."</h5>";
     echo "<img src='".$image."' style='width:1038px;height:150px;'>";
     echo"<div>";
     echo"<p style='font-size:20px;text-align:justify;'>".$stext."</p></div>";
     echo"<b>By:</b>".$dname."<br>";
     echo"<br><a href='contant.php?id=".$row[5]."'><button >Read_More</button></a>";
     echo"<hr>";

      }
    ?>
      </div>
    </div>
    </div>
  <div class="rightcolumn">
    <div class="card" style="height:204px;">
      <form action="catsearch.php" >
    <h3 style="background-color:#333;color:white;width:130px;display:inline;">Search-Bar :</h3>
    <select  name=search>
          <option value=category>Category</option>
          <option value=title>Title</option>
          </select><br><br><br>
    
      
<input style="width:70%;height:40px;font-size:20px;"type="text"placeholder="Search-Bar" name="sea"><input style="height:40px;font-size:20px;"type="submit" value="search" name="n1">
</form>
 </div>
    <div class="card">
      <h3 style="background-color:#333;color:white;width:107px;">Categories</h3>
     <div style="height: 150px;">
        <?php
      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q2="select * from category";
      $res2=mysqli_query($con,$q2);
       while($raw=mysqli_fetch_array($res2))
      {
      echo"<a href='sidecatsearch.php?value=".$raw[0]."'><button>".$raw[1]."</button></a>";
      }
       ?>
    </div>
    </div>
    <div class="card">
      <center><img src="images/l.png" width="100" height="100"></center><br>
     
        <form>
       
      <input type="text" name="userr" placeholder="Email" class="input" required><br><br>
      <input type="password" name="pswd" placeholder="Password"class="input" required><br><br>
      <select name="utype" class="input">
                <option value=user>User</option>
      </select><br><br>
      <center><button name="login">Login</button></center>
         </form>
         <center><h4>Not Registor ? <a href="registration.php"class="a" style="text-decoration: none;">Click here</a></h4></center>
        </div>
      
    </div>
     </div>

<div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div></body></html>
<?php
if(isset($_REQUEST['login']))
{

$user=$_REQUEST['userr'];
$pswd=$_REQUEST['pswd'];
$utype=$_REQUEST['utype'];
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$q3="select * from login where username='$user' AND pswd='$pswd' AND utype='$utype'";
$res=mysqli_query($con,$q3);
if($row=mysqli_fetch_array($res))
{
session_start();
$_SESSION['user']=$user;
header("location:ureview.php");
}
else
{
  echo"<script>alert('Invalid Username or Password')</script>";
}
}
?> 