<?php
include("header.php")

?>





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

?>



<?php
include("footer.php")

?>


   
