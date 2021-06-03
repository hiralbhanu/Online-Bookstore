
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Books N Beans Login</title> 
<meta charset="utf-8">

<meta name="description" content="User can access various books on fiction, mysteries by doing login after registration.Login is done using username and password. All these fields are validated.">
  <meta name="keywords" content="login username password validate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
form
{
background-color:white;
border: 3px solid black;
height:550px;
margin-left: 350px;
margin-right:350px;
}
.imgcontainer {
text-align: center;
margin: 24px 0 12px 0;
}

img.avatar {
width: 50%;
border-radius: 50%;
}
.container {
padding: 16px;
}
.error {color: #FF0000;}

 

.active {
background-color: black;
}


body
{
background-image: url("image23.jpg");
background-position: left top;

background-repeat: no-repeat;
background-size: 100%;
color:black;


}


</style>

</head>
<body bgcolor = grey>
<?php
session_start();
$_SESSION['login'] = "logged_out";
$_SESSION['user'] = "";
$_SESSION['email'] = "";

$err="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
include('connect.php');
$user = $_POST['uname'];
$pass = $_POST['psw'];
$sql = "SELECT name, email, gender , address , username , password FROM login where username= '$user' AND password= '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$_SESSION['login'] = "logged_in";
while($row = $result->fetch_assoc()) {


$_SESSION['user'] = $row["username"];
$_SESSION['email'] = $row["email"];

header('Location:home.php');
}

}
else { 
$err="Wrong Username or Password";
}

 

}

?>
<h1>Login</h1>
<nav class="navbar navbar-inverse">
<div class="container-fluid">

<ul class="nav navbar-nav">
<li><a href="home.php">Home</a></li>
<li><a href="books.php">Books</a></li>
<li><a href="wishlist.php">Wishlist</a></li>
<li><a href="aboutus.php">About Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">

<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li class="active"><a href="login.php">Login</a></li>
</ul>
</div>
</nav>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
<font size=4 >
<div class="imgcontainer">
<img src="f.jpg">
</div>

<div class="container">
<b>Username</b><br>
<input type="text" id="name" placeholder="Enter Username" name="uname" required>
<br>
<br>
<b>PASSWORD :</b><br>
<input type="password" placeholder="Enter Password" name="psw" required>
<br> 
<br> 
<input type="submit" value="LOGIN">
<br>
<p class="error"><?php echo $err; ?></p>
<br>
</div>
</font>
</form>
</body>
</html>

*