
<?php require_once 'process.php';?>
<?php //Session Message 
    if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">


    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
        </div>
        <?php endif?>

        <!-- Hero Section Start -->

<div class="hero-section">
<h1>Simple To Do List !</h1>
</div>

<!-- Hero Section End -->
    <div class="container">
        <form action="index.php?name=todo" method="POST">
            <input type="text"class="form-control" name="task">
            <input type="submit" class=" btn btn-primary">
        </form>

    </div>
