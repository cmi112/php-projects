<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php require_once 'process.php';?>

    <?php
    if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">


    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
        </div>
        <?php endif?>
    <div class="container">

    <?php
    $mysqli=new mysqli('localhost','root','root','crud') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM data") or die($mysqli->error);
    ?>
    <div class="row justify-content-center"> 
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
        while($row=$result->fetch_assoc()):?>
        <tr>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['location'];?></td>
          <td>
            <a href="index.php?edit=<?php echo $row['id'];?>" class="btn btn-info"> Edit</a>
            <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger"> Delete</a>
          </td>
        </tr>
       <?php endwhile;?>
      </table>
    </div>

<?php
    // Array log the result
    //pre_r($result); //array
  // pre_r( $result->fetch_assoc());  //Human readable result in log
    function pre_r($array){  //it shows the results
      echo '<pre>';
      print_r($array);
      echo '<pre>';
    }
    ?>
    <div class="row justify-content-center">


    <form action="process.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="form-group">
        <label>Name </label>
        <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
        </div>
      <div class="form-group">
      <label>Location </label>
        <input type="text"  class="form-control" name="location" value="<?php echo $location;?>">
      </div>
      <div class="form-group">
        <?php 
        if($update==true):
        ?>
          <button type="submit" class="btn btn-info" name="update">Update</button>
          <?php else:?>
      <button type="submit" class="btn btn-primary" name="save">Save</button>
      <?php endif;?>
      </div>
    </form>
    </div>
    </div>
</body>
</html>