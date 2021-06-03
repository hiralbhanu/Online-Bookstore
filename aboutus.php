<?php
include('connect.php');
session_start();
if(isset($_SESSION['login'])){

if ($_SESSION['login'] == 'logged_in') {
  
  

  $user = "Welcome ".$_SESSION['user'];
  $email = $_SESSION['email'];
  $log = "Logout";
  $logurl = "logout.php";
}
else
{
$user = "";
$log = "Login";
$logurl = "login.php";
}
}
else
{
  $user = "";
$log = "Login";
$logurl = "login.php";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
     color:white;
}

</style>
</head>
<body background="aboutus_wallpaper.jpg">
<center><h1><img src="logo.png"></h1></center>
<hr>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="books.php">Books</a></li>
    <li><a href="wishlist.php">Wishlist</a></li>
    <li  class="active"><a href="aboutus.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><font size=4 color="white"><?php echo $user; ?></font></li>
    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="<?php echo $logurl; ?>"><?php echo $log; ?></a></li>
    </ul>
  </div>
</nav>
<br>
<h2>WE ARE AN ONLINE COMMUNITY WHO BELIEVE IN KNOWLEDGE FOR ALL.BOOKS PROVIDE AN ESCAPE FROM REALITY.WE SELL TOP LISTED ,HIGHLY GROSSING BOOKS!</h2>



<H3>FOR FURTHER QUERIES CONTACT:</H3>
  Hiral:1234567890
  <br>
  Niyati:0987654321
  <br>
  Sonal:9167857773
  <br>
  
  </body>
</html>
