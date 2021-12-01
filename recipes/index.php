<?php

$db = mysqli_connect("localhost","root","root","posts");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<?php



if(isset($_POST["submit"]))
{
  $target="recipes/images/".basename($_FILES['image']['name']);
  // Get all the subitted data from the form
  $image=$_FILES['image']['name'];
  $text=$_POST['text'];
  
  $sql ="INSERT INTO images (image,text) VALUES ('$image','$text')";
  mysqli_query($db,$sql);//stored the submited data in to the db table :images

  // Move the uploaded image into the folder: images
  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
    $msg="Image uploaded successfully";
  }else{
    $msg ="Failed";
  }
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
  <style>
  table img{
    width:100px; 
    height:100px;
   
  }
  tr{
    border:2px solid;
    
  }
  td {
    border:2px solid;
    padding:10px;

  }
  
  </style>
</head>
<body>

<h2>Insert Data</h2>

<form action="index.php?name=data" method="post" enctype="multipart/form-data">
  <table border="2">
    <tr>
      <td>Enter Name</td>
      <td><input type="text" name="text" placeholder="Enter Name" Required></td>
    </tr>
    <tr>
      <td>Select Image</td>
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

<hr/>




<h2>All Records</h2>

<table border="2">
  <tr>
    <td>ID</td>
    <td>Text</td>
    <td>Images</td>
  </tr>

<?php



$records = mysqli_query($db,"select * from images"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['text']; ?></td>
    <!-- <td><img src="<?php echo $data['images']; ?>" width="100" height="100" ></td> -->
   <td><?php echo "<img  src='recipes/images/".$data['image']. "'>";?></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>