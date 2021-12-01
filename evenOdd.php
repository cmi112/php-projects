<!-- Hero Section Start -->

<div class="hero-section">
<h1>Even Odd Checker</h1>
</div>

<!-- Hero Section End -->

<form action="index.php?name=evenOdd" method="post">
        <div class="mb-3">
            <input type="number" class="form-control" name="number" placeholder="Enter Number">
        </div>
       
     
        <input type="submit" class="form-control btn btn-primary"  name="submit" placeholder="Username">
    </form>



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