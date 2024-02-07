
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>
    


<form action="" method="post" enctype="multipart/form-data">
    <div class="container">
      <!--
<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name"  placeholder="Enter Your Name" required>
  </div>
-->
  <br>

<div class="form-group">
<label for="exampleInputCategory">Category</label>

    <select name="category" id="exampleInputCategory" > 
        <option value="drink">drink</option>
        <option value="pizza">pizza</option>
        <option value="sandiwitch">sandiwitch</option>


    </select>

  </div>

  <br>
  <div class="form-group">
    <label for="exampleInputPrice">Price</label>
    <input type="number" min="1" step="any"  class="form-control" id="exampleInputPrice" name="price" placeholder="phone" required/>

  </div>
  <br>
  <div class="form-group">
  <label for="myfile">Select files:</label>
  <input type="file"  name="file"  accept="image/*"><br><br> 
  <!-- image/*  mean all types of images -->
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">

  </div>
</form>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
  
    
       $selected = $_POST['category'];
   

    $price=$_POST['price'];
    echo $price;
    echo '<br>';
    echo '<br>';
    echo $selected;
    echo '<br>';
    echo '<br>';

    $fileType=$_FILES["file"]["type"];
    echo $fileType;
    echo '<br>';
    $fileName=$_FILES["file"]["name"];
    echo $fileName;

   //$file=$_FILES["file"]["tmp_name"]; //some with a code bottom;
   $file=file_get_contents($_FILES["file"]["tmp_name"]);

    move_uploaded_file($file,"files/".$fileName);
    $positon="files/".$fileName;
    echo '<br>';
    echo $positon;
    echo '<br>';


  // if( $selected!=='' && $fileName!==''  &&$price!=='' && $positon!=='') {
    $sql =$database->prepare("insert into products (name,category,price,image) values(:name ,:category,:price,:image)");
 // $sql =$database->prepare("insert into products (price) values($price)");

    $sql->bindParam("name",$fileName); // name is the name of column id DataBase
  $sql->bindParam("category",$selected);
    $sql->bindParam("price",$price);
    $sql->bindParam("image",$positon);
// can you use bindparam any sql command

if($sql->execute())
{
  echo 'success';
}
else 
echo 'failed';
   // }
}
$sql1 =$database->prepare("select * from products");
$sql1->execute();
echo('<br>');
echo '---------------------';
echo('<br>');
echo('<br>');
foreach ($sql1 as $f)
{
  echo "<a href='".$f["image"] ."' download>".$f["name"]."</a><br>";
}


?>