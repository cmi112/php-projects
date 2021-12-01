<?php
include("header.php");
include("/styles/styles.css");

?>




    

<?php
if($_GET["name"]=="contactForm"){
     include("contactform.php");
     include("/styles/styles.css");

}
if($_GET["name"]=="calculator"){
    include("calculator.php");
    include("/styles/styles.css");

}
if($_GET["name"]=="evenOdd"){
    include("evenOdd.php");
    include("/styles/styles.css");

}
if($_GET["name"]=="mail"){
    include("mail.php");
    include("/styles/styles.css");

}
if($_GET["name"]=="todo"){
    include("./todolist/todo.php");
   

}
if($_GET["name"]=="location"){
    include("./phpcrud/index.php");
    include("/styles/styles.css");

}
if($_GET["name"]=="posts"){
    include("posts.php");
    include("/styles/styles.css");

}
if($_GET["name"]=="recipes"){
    include("./recipes/recipes.php");
    include("/styles/styles.css");

}
if($_GET["name"]=="data"){
    include("./recipes/index.php");
    include("/styles/styles.css");

}
?>



<div class="container">
<?php
include("footer.php")

?>

</div>


   
