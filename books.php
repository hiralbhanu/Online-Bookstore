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

 

$book_query = "SELECT * FROM books";
$result = $conn->query($book_query);
$books_name= [];
$books_price= [];
$books_img =[];
$i=1;
while($row = $result->fetch_assoc()) {

$books_name[$i] = $row['name'];
$books_img[$i] = $row['image'];
$books_price[$i] = $row['price'];
$i++;
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Books N Beans Books to buy online</title>
</head>
<meta charset="utf-8">

 <meta name="description" content="Variety of books to buy online from top authors  at best price. Books of various genres are available like mysteries , mythologies , fictions , etc. ">
  <meta name="keywords" content="books to buy online">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<style>
body{
background-image:url(image23.jpg);
}

 




div.container{
clear:left;
padding:10px;
}

div.gallery {
margin: 15px;
border: 1px solid #ccc;
float: left;
width: 220px;
opacity: 0.5;
filter: alpha(opacity=50); 
}

div.gallery:hover {
border: 1px solid #777;
opacity: 1.0;
filter: alpha(opacity=100); 
}

div.gallery img {
width: 220px;
height: 300px;
}

div.desc {
padding: 15px;
text-align: center;
}

.btn {
border: none;
color: black;
padding: 10px 20px;
font-size: 12px;
cursor: pointer;
}

.success {background-color: #4CAF50;;} /* Green */
.success:hover {background-color: #46a049;}

div.desc {
padding: 15px;
text-align: center;
}

.active {
background-color: black;
}


</style>

<body>
<center><h1><img src="logo.png" alt="books to buy online"></h1></center>
<h1><center>Catogories Of Books</center></h1>
<hr>
<nav class="navbar navbar-inverse">
<div class="container-fluid">

<ul class="nav navbar-nav">
<li><a href="home.php">Home</a></li>
<li class"active"><a href="books.php" class="active">Books</a></li>
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


<br>
<div class="box2">
<div class="container">

<div class="gallery"> 
<img src="<?php echo $books_img[1];?>" alt="<?php echo $books_name[1];?>">
<div class="desc"><?php echo $books_name[1];?><br><?php echo $books_price[1];?><br>
<button class="btn success" id="button1">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[2];?>" alt="<?php echo $books_name[2];?>">
<div class="desc"><?php echo $books_name[2];?><br><?php echo $books_price[2];?><br>
<button class="btn success" id="button2">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[3];?>" alt="<?php echo $books_name[3];?>">
<div class="desc"><?php echo $books_name[3];?><br><?php echo $books_price[3];?><br>
<button class="btn success" id="button3">ADD</button>
</div>
</div>


<div class="gallery"> 
<img src="<?php echo $books_img[4];?>" alt="<?php echo $books_name[4];?>">
<div class="desc"><?php echo $books_name[4];?><br><?php echo $books_price[4];?><br>
<button class="btn success" id="button4">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[5];?>" alt="<?php echo $books_name[5];?>">
<div class="desc"><?php echo $books_name[5];?><br><?php echo $books_price[5];?><br>
<button class="btn success" id="button5">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[6];?>" alt="<?php echo $books_name[6];?>">
<div class="desc"><?php echo $books_name[6];?><br><?php echo $books_price[6];?><br>
<button class="btn success" id="button6">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[7];?>" alt="<?php echo $books_name[7];?>">
<div class="desc"><?php echo $books_name[7];?><br><?php echo $books_price[7];?><br>
<button class="btn success" id="button7">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[8];?>" alt="<?php echo $books_name[8];?>">
<div class="desc"><?php echo $books_name[8];?><br><?php echo $books_price[8];?><br>
<button class="btn success" id="button8">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[9];?>" alt="<?php echo $books_name[9];?>">
<div class="desc"><?php echo $books_name[9];?><br><?php echo $books_price[9];?><br>
<button class="btn success" id="button9">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[10];?>" alt="<?php echo $books_name[10];?>">
<div class="desc"><?php echo $books_name[10];?><br><?php echo $books_price[10];?><br>
<button class="btn success" id="button10">ADD</button>
</div>
</div>


<div class="gallery"> 
<img src="<?php echo $books_img[11];?>" alt="<?php echo $books_name[11];?>">
<div class="desc"><?php echo $books_name[11];?><br><?php echo $books_price[11];?><br>
<button class="btn success" id="button11">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[12];?>" alt="<?php echo $books_name[12];?>">
<div class="desc"><?php echo $books_name[12];?><br><?php echo $books_price[12];?><br>
<button class="btn success" id="button12">ADD</button>
</div>
</div>

<div class="gallery"> 
<img src="<?php echo $books_img[13];?>" alt="<?php echo $books_name[13];?>">
<div class="desc"><?php echo $books_name[13];?><br><?php echo $books_price[13];?><br>
<button class="btn success" id="button13">ADD</button>
</div>
</div>


</div>

</div>
<script type="text/javascript">
$(document).ready(function(){
$("#button1").click(function(){
var id= 1;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});
$("#button2").click(function(){
var id= 2;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);

}
});
});
$("#button3").click(function(){
var id= 3;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);

}
});
});
$("#button4").click(function(){
var id= 4;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);

}
});
});
$("#button5").click(function(){
var id= 5;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);

}
});
});
$("#button6").click(function(){
var id= 6;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);

}
});
});
$("#button7").click(function(){
var id= 7;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});
$("#button8").click(function(){
var id= 8;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});

$("#button9").click(function(){
var id= 9;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});


$("#button10").click(function(){
var id= 10;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});



$("#button11").click(function(){
var id= 11;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});



$("#button12").click(function(){
var id= 12;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});



$("#button13").click(function(){
var id= 13;

$.ajax({
type: "POST",
url: "add_book.php",
data:{
'book_id' : id

},
async:true,
cache:false,
success:function(result) {

alert(result);
}
});
});


});
</script>
</body>
</html>