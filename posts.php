<?php 


// Adding session message
session_start();

// Connecting Database
$mysqli=new mysqli('localhost','root','root','contactform') or die(mysqli_error($mysqli));

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
// Inserting values
$mysqli->query("INSERT INTO `post`(`id`, `title`, `content`, `author`) VALUES ('','$title','$content','$author')") or die($mysqli->error);
      // Adding session msg
      $_SESSION['message']="Record has been saved !";
      $_SESSION['msg_type']="success";
      header("location:index.php");
}

?>
<div class="container">
    <form action="posts.php" method="POST">
        <input type="text" class="form-control" name="title" >
        <textarea name="content"  class="form-control" cols="30" rows="10"></textarea>
        <input type="text" class="form-control" name="author" >
        <input type="submit" >
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Title Here</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cum perspiciatis maxime quas dicta modi facilis quam provident repellendus. Sit!</p>
        </div>
        <div class="col">
            <h2>Title Here</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cum perspiciatis maxime quas dicta modi facilis quam provident repellendus. Sit!</p>
        </div>
        <div class="col">
            <h2>Title Here</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cum perspiciatis maxime quas dicta modi facilis quam provident repellendus. Sit!</p>
        </div>

    </div>



</div>