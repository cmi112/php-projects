<?php
include("header.php");
include("/styles/styles.css");

?>




    

<?php
if($_GET["name"]=="contactForm"){
     include("./contact/contactform.php");
   

}
if($_GET["name"]=="calculator"){
    include("./calculator/calculator.php");
    

}
if($_GET["name"]=="evenOdd"){
    include("./evenOdd/evenOdd.php");
   

}
if($_GET["name"]=="mail"){
    include("./email/mail.php");
   

}
if($_GET["name"]=="todo"){
    include("./todolist/todo.php");
   

}
if($_GET["name"]=="location"){
    include("./phpcrud/index.php");
   

}
if($_GET["name"]=="posts"){
    include("./posts/posts.php");
   

}
if($_GET["name"]=="recipes"){
    include("./recipes/recipes.php");
  

}
if($_GET["name"]=="data"){
    include("./recipes/index.php");
  

}
?>



<div class="container">
<?php
include("footer.php")

?>

</div>


   
