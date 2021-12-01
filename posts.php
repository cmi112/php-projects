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


<!-- Hero Section Start -->

<div class="hero-section">
<h1>Blog Posts </h1>
</div>

<!-- Hero Section End -->
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
<div class="container posts-list">
<div class="row">
    <?php // Fetching data from DB
        $mysqli=new mysqli('localhost','root','root','posts') or die(mysqli_error($mysqli));
        $result=$mysqli->query("SELECT * FROM post") or die($mysqli->error);
        ?>
        <?php
        while($row=$result->fetch_assoc()):
        ?>
           
                <div class="col col-3 col-md-4 py-md-5">
                   <div class="card" style="width: 18rem;"> 
                   <img src="https://media.sproutsocial.com/uploads/2020/08/best-times-to-post-2021-feature-image.png" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h5 class="card-title"><?php echo $row['title'];?></h5>
                        <p  class="card-text"><?php echo $row['content'];?></p>
                        <p class="card-text">Author : <?php echo $row['author']?? 'Unknown' ;?></p>
                        <span>Published : <?php echo $row['register_date'];?></span>
                      
                        </div>
                     
                    </div>
                </div>
            
    <?php endwhile;?>
    </div>
</div>