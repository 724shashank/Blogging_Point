<!DOCTYPE html>
<html>
<head>
  <title>Author-login</title>
  <style type="text/css">
    body
    {
  padding: 10px;
  background: url(Images/b4.jpg);
  background-repeat: no-repeat;
  background-size: 1920px 1965px;
  font-family: 'Playfair Display', serif;
  font-size:20px;
    }
    .input
{
  width:100%;
  height:50px;
  font-size:20px;
  font-family: Comic Sans MS;
}
.card {
  background-color:purple;
  padding: 20px;
  margin-top: 100px;
  width:25%;
  margin-left: 560px;
  box-shadow:5px 5px 5px 5px black;
 }
 #grad1 
       {
        background-color: red; /* For browsers that do not support gradients */
        background-image: linear-gradient(to right ,#6A9AEC, lightgrey ,#C330F8);
       }
  </style>
</head>
<body >
<div class="card" id="grad1">
      <center><img src="images/l.png" width="100" height="100"></center><br>
      
        <form>
          <select name="utype" class="input">
                <option value="author">Author</option>
                
      </select><br><br>
       
      <input type="text" name="user" placeholder="Email" class="input"><br><br>
      <input type="password" name="pswd" placeholder="Password"class="input"><br><br><br>
      <button style="width:200px;height:50px;font-size:20px;font-family: Comic Sans MS;display:inline;" name="login">Login</button><a href="index.php" style="margin-left: 100px">Back</a>
      
       
        </form>
        </div>
      
    </div>
     </div>
     </body>
    </html>
    <?php
if(isset($_REQUEST['login']))
{
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$utype=$_REQUEST['utype'];
$con=mysqli_connect("127.0.0.1","root","","blog_portal");
$q1="select * from login where username='$user' AND pswd='$pswd' AND utype='Author'";
$res=mysqli_query($con,$q1);
if($row=mysqli_fetch_array($res))
{
  session_start();
  $_SESSION['user']=$user;
  header("location:userhome.php");
}
else
{
  header("location:alogin.php?error=invalid Username or Password");
}
}
?>