<?php include("bnav.php"); ?>
	  
      <?php
      $sty=$_REQUEST['search'];
      $data=$_REQUEST['sea'];
      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q3="select * from blog where category='$data' OR title='$data' ";
      $result=mysqli_query($con,$q3);
      $row=mysqli_fetch_array($result);
      if($row>0)
      {
      if($sty=='category')
      {
      
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
     echo"<div class='card'>";
     echo"<div style='overflow-y:scroll;height:500px;'>";
     echo "<h2 style='display:inline;'>".$title."</h2><a href='index.php' style='margin-left:1210px;'><button>Back</button></a>";
     echo "<h5>".$date."</h5>";
     echo "<img src='".$image."' style='width:1410px;height:150px;'>";
     echo"<div><p style='text-align:justify;'>".$stext."</p></div>";
     echo"<b>By:</b>".$dname."<br>";
     echo"<br><a href='contant.php?id=".$id."'><button name='id'>Read_More</button></a>";
     echo"<hr></div></div>";

      }
  }

else
	  {

      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q2="select * from blog where title='$data'";
      $res=mysqli_query($con,$q2);
      $row=mysqli_fetch_array($res);
      echo"<div class='card'>";
      echo"<div style='height:100%;'>";
      echo "<h2 style='display:inline;'>".$row[3]."</h2><a href='index.php' style='margin-left:1210px;'><button>Back</button></a>";
      echo "<h5>".$row[4]."</h5>";
      echo "<img src='".$row[5]."' style='width:1410px;height:150px;'>";
      echo"<div>";
      echo"<p style='text-align:justify;'>".$row[7]."</p></div></div></div>";

	  }
    }
    else
    {
      header("location:index.php?message='Try Another keywords'");
    }
	  ?>
	  </div></div>
