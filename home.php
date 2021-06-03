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
<title>Books and Beans Online bookstore</title>
<meta charset="utf-8">

 <meta name="description" content="An Online BookStore where you can find Classics, thrillers and comics. Handpicked from a variety of books , Books N Beans brings you the most epic Classics">
  <meta name="keywords" content="online bookstore">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.active {
background-color: black;
}
</style>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body background="wallpaper.png">

<center><h1><img src="logo.png" alt="Online Books"></h1></center>
<hr>
<nav class="navbar navbar-inverse">
<div class="container-fluid">

<ul class="nav navbar-nav">
<li class="active"><a href="home.php">Home</a></li>
<li><a href="books.php">Books</a></li>
<li><a href="wishlist.php">Wishlist</a></li>
<li><a href="aboutus.php">About Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><font size=4 color="white"><?php echo $user; ?></font></li>
<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="<?php echo $logurl; ?>"><?php echo $log; ?></a></li>
</ul>
</div>
</nav>
<br>

 <p hidden>

<p hidden =' <a href = 'https://www.google.co.in/search?q=books&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiE0cGXyqnXAhVDto8KHXfiCHAQ_AUICygC&biw=1366&bih=613#imgrc=DU1u8DYxFT1BsM:' >' >

<div class="w3-content w3-section" style="max-width:50%">
<img class="mySlides" src="slide1.jpg" style="width:40%">
<img class="mySlides" src="slide2.jpg" style="width:40%">
<img class="mySlides" src="slide3.jpg" style="width:40%">
<img class="mySlides" src="slide4.jpg" style="width:40%">
<img class="mySlides" src="slide5.jpg" style="width:40%">
<img class="mySlides" src="slide6.jpg" style="width:40%">
<img class="mySlides" src="data1.png" style="width:40%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none"; 
}
myIndex++;
if (myIndex > x.length) {myIndex = 1} 
x[myIndex-1].style.display = "block"; 
setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br>

<div class="footer">
<p>&copy; Books and Beans 2017-18</p>
</div>
</body>
</html>