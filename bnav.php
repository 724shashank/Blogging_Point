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

<div>
  <h1><img src="images/b11.png" width="100" height="100" >
    <img style="float:right;margin-top:70px;" src="images/social.png" width="100" height="30" >
  </h1>

 
  
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="registration.php">Registration</a>
  <a href="alogin.php">Author-Login</a>
  <a href="contactus.php">Contact</a>
  <a href="aboutus.php" style="float:right">About-Site</a>
</div>
</body>
</html>
