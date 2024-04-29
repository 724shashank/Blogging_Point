<?php
        session_start();
        $id=$_SESSION['id'];
        $user=$_SESSION['user'];
      	$title=$_REQUEST['title'];
		$stext=$_REQUEST['ste'];
		$wtext=$_REQUEST['wte'];
    $con=mysqli_connect("127.0.0.1","root","","blog_portal");  
    $query1="update blog set title='$title',stext='$stext',wtext='$wtext' where id='$id' AND blogby='$user'";
    $res=mysqli_query($con,$query1);
        if($res>0)
        {
            header("location:userhome.php?msg=Blog updated");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }
    
    ?>