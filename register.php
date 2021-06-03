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
<html>
<head> 
<link rel="stylesheet" type="text/css" href="style.css">
<title>Books N Beans Registration Page</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Books N Beans Registration">

<meta name="description" content="The user needs to create an account by entering username and other details and register on Books N Beans Registration.His account is used after successful login">
  



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
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
<body>
<?php
$flag=1;
$nameErr = $emailErr = $genderErr = $userErr = $passErr = $addErr = "";
$name = $email = $gender = $user = $pass = $add = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["name"])) {
$nameErr = "*Name is required";
$flag=0;
} 
else {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameErr = "*Only letters and white space allowed";
$flag=0; 
}

}

 


if (empty($_POST["email"])) {
$emailErr = "*Email is required";
$flag=0;
} else {
$email = test_input($_POST["email"]);

}
if (empty($_POST["gender"])) {
$genderErr = "*Gender is required";
$flag=0;
} else {
$gender = test_input($_POST["gender"]);
}
if (empty($_POST["add"])) {
$addErr = "*Address is required";
$flag=0;
} 
else {
$add = test_input($_POST["add"]);


}

 

if(empty($_POST["uname"]))
{
$userErr = "*Username is required";
$flag=0;
}
else{
$user = test_input($_POST["uname"]);
}


if(empty($_POST["psw"]))
{
$passErr = "*Password is required";
$flag=0;
}
else{
$pass = test_input($_POST["psw"]);

// Password must be strong
if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pass))
{
$passErr = "*Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
$flag=0;
}

}

if($flag==1){
session_start();

$_SESSION['POST'] = $_POST;

header('Location:add.php');
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>
<h1>Registration</h1>

<nav class="navbar navbar-inverse">
<div class="container-fluid">

<ul class="nav navbar-nav">
<li><a href="home.php">Home</a></li>
<li><a href="books.php">Books</a></li>
<li><a href="wishlist.php">Wishlist</a></li>
<li><a href="aboutus.php">About Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><font size=4 color="white"><?php echo $user; ?></font></li>
<li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="<?php echo $logurl; ?>"><?php echo $log; ?></a></li>
</ul>
</div>
</nav>

<br>
<br><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<fieldset>
<legend>Please enter the following details</legend>
Name :<input type="text" name="name" value="<?php echo $name;?>" >
<span class="error"><?php echo $nameErr;?></span>
<br><br>
Email :<input type="email" name="email" value="<?php echo $email;?>" >
<span class="error"><?php echo $emailErr;?></span>
<br><br>
Gender : <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other
<span class="error"><?php echo $genderErr;?></span>
<br><br> 

Address : <input type"text" name="add" value="<?php echo $add; ?>" >
<span class="error"><?php echo $addErr;?></span>
<br><br>

Username :<input type="text" name="uname" value="<?php echo $user;?>">
<span class="error"><?php echo $userErr;?></span>
<br><br>
Password: <input type="password" name="psw" value="<?php echo $pass;?>" >
<span class="error"><?php echo $passErr;?></span>
<br><br>
<input type="submit" value="Register" />
</fieldset>
</form>
</body>
</html>