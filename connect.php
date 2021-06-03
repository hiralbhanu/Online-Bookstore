<?php
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "wp2_project";

$conn = mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
 die("Connection failed:".mysqli_connect_error());
}

?>