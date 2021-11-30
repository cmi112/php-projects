<?php
$msg="";
// If upload button is pressed
if(isset($_POST['upload'])){
    echo "<pre>",print_r($_FILES['image']['name']),"</pre>";
  $target="recipes/images/".basename($_FILES['image']['name']);
  // Connect db
  $db=mysqli_connect("localhost","root","root","recipes");
  // Get all the subitted data from the form
  $image=$_FILES['image']['name'];
  $title=$_POST['title'];
  $content=$_POST['content'];
  $author=$_POST['author'];
  
  $sql ="INSERT INTO `images`( `title`, `content`, `image`, `author`) VALUES ('$title','$content','$image','$author')";
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
   echo "<img src='$image/".$row['image']."'>";
   echo "<p>".$row['title']."</p>";
   echo "</div>";
 }

?>





<!-- Hero Section Start -->
<div class="container">
<div class="jumbotron">
<h1>Welcome to Recipes World !</h1>
</div>
 
</div>
<!-- Hero Section End --> 
<!-- Add Recipes Section start -->
<div class="container">
<form action="index2.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Add Recipes: </label>
 <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter the Name here">
</div>
<div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">Content</label>
 <textarea class="form-control"  name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="input-group mb-3">
 <label class="input-group-text" for="inputGroupFile01">Upload</label>
 <input type="file" class="form-control"  name="image" id="inputGroupFile01">
</div>
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Recipes Name: </label>
 <input type="text" class="form-control" id="exampleFormControlInput1"  name="author" placeholder="Author">
</div>
 
 
<input type="submit" name="upload" value="Upload Image/Data" >
 
</form>
</div>
 
<!-- Add Recipes Section end -->
