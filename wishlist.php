<?php
include('connect.php');
session_start();
$table1="";
$error="";
$total=0;
if(isset($_SESSION['login'])){

if ($_SESSION['login'] == 'logged_in') {


$user1= $_SESSION['user'];

$user = "Welcome ".$_SESSION['user'];
$email = $_SESSION['email'];
$log = "Logout";
$logurl = "logout.php";

$wish_query = "SELECT * FROM wishlist where user= '$user1'";
$result = $conn->query($wish_query);
$books_name= [];
$books_price= [];
$books_img =[];
$i=1;
$k=1;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$books_name[$i] = $row['book_name'];
$books_img[$i] = $row['image'];
$books_price[$i] = $row['price'];
$i++;
}
$table1.="<h2>Books Added To Cart</h2><table class='w3-table-all w3-hoverable'><thead><tr class='w3-light-grey'><th>Book Name</th><th>Price</th></tr></thead>";
while($k<$i)
{
$table1.="<tr><td><img src='".$books_img[$k]."'height=100 width=100>".$books_name[$k]."</td><td>".$books_price[$k]."</td></tr>";
$total+=$books_price[$k];
$k++;
}

$table1.="</table><center><p><font size=6>".$user1." Your total amount is Rs ".$total."</font></p></center>";
$table1.="<center><button class='button button2'>ORDER NOW</button></center> ";
}
else
{
$error="No Books in the wishlist";
}
}
else
{
$user = "";
$log = "Login";
$logurl = "login.php";
$error= "Login into your account to add books to the wishlist";
}
}

else
{
$user = "";
$log = "Login";
$logurl = "login.php";
$error= "Login into your account to add books to the wishlist";
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Books N Beans Books Wishlist</title>
<meta charset="utf-8">

 <meta name="description" content="The books I wish to read are showcased in Books wishlist and the total bill amount is calculated. Prices can be viewed and the books can be ordered.">
  <meta name="keywords" content="Books Wishlist Books I wish to read">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.active {
background-color: black;
}
.button {
background-color:black; 
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
margin: 4px 2px;
cursor: pointer;
}

.button1 {font-size: 24px;}
.button2 {font-size: 24px;}
.button {font-size: 12px;}
</style>
<script>
$(document).ready(function(){
$(".button2").click(function(){
alert("Your order has been placed and the books will be delivered at your Address");
$.ajax({
type: "POST",
url: "delete_book.php",
data:{


},
async:true,
cache:false,
success:function(result) {

alert(result);
window.location.reload(true);

}
});
});
});
</script>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<center><h1><img src="logo.png" alt="Books Wishlist"></h1></center>
<hr>
<nav class="navbar navbar-inverse">
<div class="container-fluid">

<ul class="nav navbar-nav">
<li><a href="home.php">Home</a></li>
<li><a href="books.php">Books</a></li>
<li class="active"><a href="wishlist.php">Wishlist</a></li>
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

<div class="w3-container">



<?php echo $table1; ?>
<?php echo $error; ?>


</div>

 


</body>
</html>