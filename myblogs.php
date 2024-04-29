<?php include("anav.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>My-Blogs</title>
  <style type="text/css">
    .card2
    {
      width:100%;
      height:550px;
      background-color:mistyrose;
      padding: 20px;
      margin-top:20px;
      overflow-y: scroll;
    }
  </style>
</head>
<body>
<div class="card2">
      <div>
<?php

      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q1="select * from blog where blogby='$user'";
      $res=mysqli_query($con,$q1);
      while($row=mysqli_fetch_array($res))
      {
     echo"<h2>Blog-Id:".$row[0]; 
     echo"<h2>".$row[3]."</h2>";
     echo"<h5>".$row[4]."</h5>";
     echo"<img src='".$row[5]."' style='width:1425px;height:150px;'>";
     echo"<div>";
     echo"<p style='font-size:20px;text-align:justify;'>".$row[6]."</p></div>";
     echo"<a href='acontant.php?id=".$row[0]."'><button >Read_More</button></a>";
     echo"<hr>";

      }
    ?>
    </div>
  </div>
<div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
    
    