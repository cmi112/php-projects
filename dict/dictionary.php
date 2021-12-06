<?php
// Adding session message
session_start();
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "root";
$conn=mysqli_connect($servername,$username, $password, $database);
if(isset($_POST['submit']))
{    
     $word = $_POST['word'];
     $author= $_POST['author'];
  
    

     $sql = "INSERT INTO `words` (word,author) VALUES ('$word', '$author')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>

<form action="dict/dictionary.php" method="POST">
<input type="text" name="word" >
<input type="text" name="author" >
<input type="button" name="submit" value="Add word">

</form>