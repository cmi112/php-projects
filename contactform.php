<?php
// Adding session message
session_start();
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
        //   Form Validation
if (empty($firstname) || empty($lastname)) {
    $_SESSION['message']="Fill the Form";
    $_SESSION['msg_type']="warning";
    header("location:index.php?name=contactForm"); // Redirection after the submit
    return false;
}

     $sql = "INSERT INTO `users_info` (firstname,lastname,email,msg) VALUES ('$firstname', '$lastname', '$email', '$msg')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>

<?php //Session Message 
    if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">


    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
        </div>
        <?php endif?>
<!-- Hero Section Start -->

<div class="hero-section">
<h1>Contact us !</h1>
</div>

<!-- Hero Section End -->
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
        <input type="submit" class="form-control btn btn-primary"  name="submit" placeholder="Username">
    </form>





