<?php
$servername = "localhost";
$database = "contactform";
$username = "root";
$password = "root";
$conn=mysqli_connect($servername,$username, $password, $database);
if(isset($_POST['submit']))
{    
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $msg = $_POST['msg'];
     $sql = "INSERT INTO `users_info` VALUES ('$firstname', '$lastname', '$email', '$msg')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>


    <form action="index.php/?name=contactForm" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" name="firstname" placeholder="First Name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Write your email">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="msg" placeholder="Write your message Here" id="floatingTextarea"></textarea>
        </div>
        <input type="submit" class="form-control" name="submit" placeholder="Username">
    </form>




