	  <?php include("bnav.php"); ?>
 	  <div class="card">
      <div style="height:100%;">
      <?php
      
      $id=$_REQUEST['id'];
      $con=mysqli_connect("127.0.0.1","root","","blog_portal");
      $q1="select * from blog where id='$id'";
      $res=mysqli_query($con,$q1);
      $row=mysqli_fetch_array($res);
      
     echo "<h2 style='display:inline'>".$row[3]."</h2> <a href='index.php' style='margin-left:1210px;'><button>Back</button></a>";
      echo "<h5>".$row[4]."</h5>";
      echo "<img src='".$row[5]."' style='width:1410px;height:150px;'>";
      echo"<div>";
      echo"<p style='text-align:justify;'>".$row[7]."</p></div>";

	  ?>
	  </div>
	  </div>