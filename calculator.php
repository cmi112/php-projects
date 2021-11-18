
<div id="content" style="padding: 4rem 0;">

<div class="container">

<h1>My Calculator</h1><div class="container justify-content-md-center">

<form action="index.php/?name=calculator" method="post">

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

<input type="submit" class="form-control" name="submit" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>



</form>

<?php
$num1 = $_POST['num1'];
$num2= $_POST['num2'];
$operation= $_POST['operation'];
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