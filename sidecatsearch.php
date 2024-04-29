<?php include("bnav.php"); ?>
	  <div class='card'style='overflow-y:scroll;' >
      <div style='height:450px;'>
      <?php
     
      $data=$_REQUEST['value'];
      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q1="select blog.dname,blog.title,blog.date,blog.image,blog.stext,blog.id from blog where category='$data'";
      $res=mysqli_query($con,$q1);
      while($row=mysqli_fetch_array($res))
      {
        $dname=$row[0];
        $title=$row[1];
        $date=$row[2];
        $image=$row[3];
        $stext=$row[4];
        $id=$row[5];
     echo "<h2 style='display:inline;'>".$title."</h2><a href='index.php' style='margin-left:1210px;'><button>Back</button></a>";
     echo "<h5>".$date."</h5>";
     echo "<img src='".$image."' style='width:1410px;height:150px;'>";
     echo"<div'>";
     echo"<p style='text-align:justify;'>".$stext."</p></div>";
     echo"<b>By:</b>".$dname."<br>";
     echo"<br><a href='contant.php?id=".$id."'><button name='id'>Read_More</button></a>";
     echo"<hr>";

      }
  
 ?>
    </div></div>
