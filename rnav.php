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
<body>
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
echo"<td><a href='vprofile.php' style='text-align:right;'><img src='".$pic."'height='90'width='90' style='border-radius:50px;margin-left:1285px;'></a></td></tr>";
echo "</table>";
}
}
?>
  <div class="topnav">
   <a href="ureview.php">Home</a>
   <a href="alist.php">Author-List</a>
  <a href="review.php">Give-Review</a>
  <a href="rcontact.php">Contact</a>
  <a href="logout.php" style="float:right">Logout</a>
</div>
</body>
</html>
