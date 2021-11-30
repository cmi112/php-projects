
<div class="container">
<form action="index.php/index.php?name=evenOdd" method="post">
<input type="number" name="number">
<input type="submit">
</form>
</div>



<?php
// PHP code to check whether the number 
// is Even or Odd in Normal way
$number=$_POST["number"];
function check($number){
    if($number % 2 == 0){
        echo $number." is Even"; 
    }
    else{
        echo $number." is Odd";
    }
}
  
// Driver Code
// $number = 39;
check($number)
?>