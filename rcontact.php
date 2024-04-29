<!DOCTYPE html>
<html>
<head>
  <title>contact-Us</title>
  <style type="text/css">
    .img:hover
    {
    font-size: 28px;
    background: darkgrey;
    width: 60px;
    height: 60px;
    text-align: center;
    line-height: 60px !important;
    border-radius: 25%;
    transition: 0.1s linear;
    }
    .img:hover p
    {
    max-height: 40px;
    opacity: 1;
    }* {
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
.div1
       {
        width:400px;
        height:600px;
        margin-left:580px; 
       margin-top:40px;
        box-sizing: border-box;
       box-shadow:5px 5px 5px 2px black;
        border-radius:10px; 
        border:1px solid black 
       }
       #grad1 
       {
        background-color: red; /* For browsers that do not support gradients */
        background-image: linear-gradient(to top ,#6A9AEC, lightgrey ,#C330F8);
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
<div>
<?php
session_start();
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$q1="select * from registration where username='$user' ";
$res=mysqli_query($con,$q1);
if($row=mysqli_fetch_array($res))
{
  $pic=$row[9];

echo"<table>";
echo"<tr><td><h1><img src='images/b11.png' width='100' height='100'> </h1></td>";
echo"<td><a href='rprofile.php' style='text-align:right;'><img src='".$pic."'height='90'width='90' style='border-radius:50px;margin-left:1285px;'></a></td></tr>";
echo "</table>";
}
}
?>
 
  
</div>

<div class="topnav">
  <a href="ureview.php">Home</a>
  <a href="alist.php">Author-List</a>
  <a href="review.php">Give-Review</a>
  <a href="rcontact.php">Contact</a>
  <a href="logout.php" style="float:right">Logout</a>
</div>


<body >
<center><div style="width:80%;height:500px;padding:100px;background-color:#343A40;margin-top:20px;border-radius:50px;box-shadow:5px 5px 5px 2px black;">

    <div style="width:27%;height: 200px;background-color:white;float:left;margin-right:50px;margin-left:30px;margin-top:40px;">
          <img src="images/p.png" width="50" height="50"style="margin-top:50px;" class="img">
          <p>+91-1234567890</p>
    </div>

    <div style="width:27%;height: 200px;background-color:white;float:left;margin-right:50px;margin-top:40px;">
          <img src="images/m.png" width="50" height="50"style="margin-top:50px;"class="img">
          <p>shashankyadav724@gmail.com</p>
    </div>

    <div style="width:27%;height: 200px;background-color:white;float:left;margin-right:20px;margin-top:40px;">
          <img src="images/g.png" width="50" height="50"style="margin-top:50px;"class="img">
          <p>Uttar-Pradesh,Sitapur</p>
    </div>
    </div>

    <div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
    <!-- /.container -->
  </footer>
    </center>
    </body>
    </html>