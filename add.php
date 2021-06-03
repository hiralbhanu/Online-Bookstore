<?php
session_start();


$temp = $_SESSION['POST'];


unset($_SESSION['POST']);
include('connect.php');
$name = ($temp['name']);
$email = $temp['email'];
$gender = $temp['gender'];
$address = $temp['add'];
$user = $temp['uname'];
$pass = $temp['psw'];
$check = "Select username From login";
$result1 = $conn->query($check);
$user_name= [];
$i=1;
while($row = $result1->fetch_assoc()) {

$user_name[$i] = $row['username'];
$i++;
}
$flag=0;

$j=1;
while($j<=$i)
{
	if($user==$user_name[$j])
	{
        $flag=1;
	}
	$j++;
}
if($flag==1)
{
	echo '<script type="text/javascript">alert("The username already exists!!!");document.location="register.php";</script>';
}
else
{
$sql = "INSERT INTO login (name, email , gender , address, username , password) VALUES ('".$name."', '".$email."', '".$gender."' , '".$address."' ,'".$user."' , '".$pass."')";
if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">alert("You have successfully registered!!!");document.location="home.php";</script>';
    
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>