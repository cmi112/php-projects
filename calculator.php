
<div id="content" style="padding: 4rem 0;">

<div class="container">

<!-- Hero Section Start -->
<div class="hero-section">
<h1>Calculator!</h1>
</div>
<!-- Hero Section End -->

<form action="index.php?name=calculator" method="POST">

<div class="input-group mb-3">

<input type="number" class="form-control" step="0.0001" name="num1" placeholder="Number One" aria-label="Username" aria-describedby="basic-addon1">

</div>
<div class="input-group mb-3">


<input type="number" class="form-control" step="0.0001" name="num2" placeholder="Number Two" aria-label="Username" aria-describedby="basic-addon1">

</div>
<div class="input-group mb-3">

<input type="text" class="form-control" name="operation" placeholder=" + , -, *,/, %" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">

<input type="submit" class="form-control btn-primary" name="submit" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>



</form>

<?php
$num1 = $_GET['num1'];
$num2= $_GET['num2'];
$operation= $_GET['operation'];
if($operation=="+"){
    echo "The Answer is :". $num1 +$num2;
}
else if($operation=="-"){
    echo "The Answer is :". $num1 -$num2;

}
else if($operation=="*"){
    echo "The Answer is :". $num1 * $num2;

}
else if($operation=="/"){
    echo "The Answer is :". $num1 / $num2;

}
else if($operation=="%"){
    echo "The Answer is :". $num1 % $num2;

}
?>