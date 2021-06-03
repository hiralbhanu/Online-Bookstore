<?php
    $Message="";



    include('connect.php');
session_start();
if(isset($_SESSION['login'])){

if ($_SESSION['login'] == 'logged_in') {
  
  

  $user = $_SESSION['user'];
  $sql = "DELETE  FROM wishlist WHERE user='$user'";
if($conn->query($sql)==TRUE)
        {
        	echo "Thankyou for ordering from Books N Beans ";

        }

        else
        	echo "Error".$conn->error; 



  }
}