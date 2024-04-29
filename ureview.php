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
echo"<td><a href='rprofile.php' style='text-align:right;'><img src='".$pic."'height='90'width='90' style='border-radius:50px;margin-left:1285px;'></a></td></tr>";
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
     echo"<p style='font-size:20px;'>".$stext."</p></div>";
     echo"<b>By:</b>".$dname."<br>";
     echo"<br><a href='rcontant.php?id=".$row[5]."'><button >Read_More</button></a>";
     echo"<hr>";

      }
    ?>
      </div>
    </div>
    </div>
  <div class="rightcolumn">
  <div class="card">
<center><img src="images/re.png" width="294" height="294"></center>
        </div> 
    <div class="card" style="height:204px;">
      <form action="rcatsearch.php" >
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
     <div style="height: 320px;">
        <?php
      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q2="select * from category";
      $res2=mysqli_query($con,$q2);
       while($raw=mysqli_fetch_array($res2))
      {
      echo"<a href='rsidecatsearch.php?value=".$raw[0]."'><button>".$raw[1]."</button></a>";
      }
       ?>
    </div>
    </div>
    </div>
     </div>

<div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div></body></html>