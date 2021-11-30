<?php
$msg="";
// If upload button is pressed
if(isset($_POST['upload'])){
  $target="recipes/images/".basename($_FILES['image']['name']);
  // Connect db
  $db=mysqli_connect("localhost","root","root","recipes");
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


<?php 
 // Connect db
 $db=mysqli_connect("localhost","root","root","recipes");
 $sql="SELECT * FROM images";
 $result=mysqli_query($db,$sql);
 while($row=mysqli_fetch_array($result)){
   echo "<div>";
   echo "<img src='recipes/images/".$row['image']."'>";
   echo "<p>".$row['text']."</p>";
   echo "</div>";
 }

?>

<form action="index.php?name=recipes" method="post" enctype="multipart/form-data">
   <input type="hidden" name="size" value="100000">
    <input type="file" name="image">
    <textarea name="text" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="upload" value="Upload Image">
</form>