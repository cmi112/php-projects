<?php 
$servername = "localhost";
$database = "posts";
$username = "root";
$password = "root";
$conn=mysqli_connect($servername,$username, $password, $database);
if(isset($_POST['submit']))
{    
     $title = $_POST['title'];
     $content = $_POST['content'];
   

     $sql = "INSERT INTO `users_posts`VALUES ('$title','$content')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}


?>
<div class="container">
    <form action="posts.php" method="POST">
        <input type="text" class="form-control" name="title" >
        <textarea name="content"  class="form-control" cols="30" rows="10"></textarea>
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