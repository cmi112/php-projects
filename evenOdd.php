<form action="index.php/evenOdd.php" method="post">
<input type="number" name="number">

<input type="submit">





</form>

<?php
$get_num= $_POST["number"];
if($get_num%2==0){
    echo "The Number is Even";
}
else{
    echo "The number is odd";
}

?>