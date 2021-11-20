<?php
include("header.php")

?>




<div class="container">
    

<?php
if($_GET["name"]=="contactForm"){
     include("contactform.php");

}
if($_GET["name"]=="calculator"){
    include("calculator.php");

}
if($_GET["name"]=="evenOdd"){
    include("evenOdd.php");

}
if($_GET["name"]=="mail"){
    include("mail.php");

}
if($_GET["name"]=="posts"){
    include("posts.php");

}
?>

</div>

<div class="container">
<?php
include("footer.php")

?>

</div>


   
