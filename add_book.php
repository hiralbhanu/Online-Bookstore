   <?php
    $Error="";



    include('connect.php');
session_start();
         $book_id=$_POST['book_id'];

      
      if(isset($_SESSION['login'])){

if ($_SESSION['login'] == 'logged_in') {
  
  

  $user = $_SESSION['user'];
        $book = "Select * from books where book_id = $book_id";
        $result = $conn->query($book);
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      
       $book_name=$row['name'];
        $book_img=$row['image'];
         $book_price=$row['price'];
    }
  }
  $sql= "INSERT INTO wishlist (user , book_id , book_name , image , price) VALUES ('".$user."', '".$book_id."', '".$book_name."' , '".$book_img."' , '".$book_price."' )";
  $conn->query($sql); 
$Error = "The book is added to the wishlist";

}
}
else
{
  $Error = "Please login into your account to order the book";
}
echo $Error;

?>