<?php
// Adding session message
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$database = "posts";
// DB Connection
$conn=mysqli_connect($servername,$username, $password, $database);
if(isset($_POST['submit']))

{   
     $title = $_POST['title'];
     $content = $_POST['content'];
     $author = $_POST['author'];
    if(empty($_POST['author'])){//Default value for the author
        $author = 'Unknown';
      }else{
        $author = $_POST['author'];
      }
     $sql = "INSERT INTO `post` (title,content,author) VALUES ('$title', '$content','$author')";

   // Form Validation 
if (empty($title) || empty($content)) {
    $_SESSION['message']="Fill the Form!";
    $_SESSION['msg_type']="warning";
    header("location:index.php/index.php?name=posts"); // Redirection after the submit
    return false;
}



     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !"; //success Message
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn); //Failed
     }
     mysqli_close($conn);
     
}

?>
<div class="container">
    <form action="index.php/?name=posts" method="post">
        <input type="text" class="form-control" name="title" placeholder="Title" >
        <textarea name="content"  class="form-control" cols="30" rows="10" placeholder="Content"></textarea>
        <input type="text" class="form-control" name="author" placeholder="Author" >
        <input type="submit" name="submit">
    </form>
</div>

<?php //Session Message 
    if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">


    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
        </div>
        <?php endif?>
<div class="container">

<?php // Fetching data from DB
    $mysqli=new mysqli('localhost','root','root','posts') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM post") or die($mysqli->error);
    ?>
    <?php
    while($row=$result->fetch_assoc()):
    ?>
    <div class="row">
        <div class="col">
            <h2><?php echo $row['title'];?></h2>
            <p><?php echo $row['content'];?></p>
            <p>Author : <?php echo $row['author']?? 'Unknown' ;?></p>
            <span>Published : <?php echo $row['register_date'];?></span>
        </div>
    </div>
    <?php endwhile;?>
</div>