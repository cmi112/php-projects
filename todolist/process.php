<?php

// Create connection
$mysqli=new mysqli('localhost','root','root','crud') or die(mysqli_error($mysqli));
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Send Data to the Database
  if(isset($_POST['submit'])){
      $task=$_POST['task'];
  // Inserting values
      $mysqli->query("INSERT INTO todo VALUES ('$task')") or die($mysqli->error);
    
        header("location:index.php");
  }
  ?>



