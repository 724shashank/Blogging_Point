<?php include("anav.php");?>
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
     echo"<br><a href='acontant.php?id=".$row[5]."'><button >Read_More</button></a>";
     echo"<hr>";

      }
    ?>
      </div>
    </div>
    </div>
  <div class="rightcolumn">
    <div class="card" style="height:204px;">
      <form action="acatsearch.php" >
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
      echo"<a href='asidecatsearch.php?value=".$raw[0]."'><button>".$raw[1]."</button></a>";
      }
       ?>
    </div>
    </div>
    <div class="card">
    <center style="background-color:#4C4A48;color:white;"><b>Message-Board</b></center>
      <div style="overflow-y:scroll;height:447px;">
        <ol >
         <?php
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$query="select * from message ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
echo"<li>".$row['message']."</li><hr>";
}
?>         
       </ol>
      </div>
      
    </div>
</div></div>
 <div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div></body></html>