<?php 
if(isset($_POST['submit'])){
    $to = "cmisomtech@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
  
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    //mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!-- Hero Section Start -->

<div class="hero-section">
<h1>Email !</h1>
</div>

<!-- Hero Section End -->



<form action="index.php/?name=contactForm" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" name="first_name" placeholder="First Name">
        </div>
       
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Write your email">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="message"  placeholder="Write your message Here" id="floatingTextarea"></textarea>
        </div>
        <input type="submit" class="form-control btn btn-primary"  name="submit" placeholder="Username">
    </form>
