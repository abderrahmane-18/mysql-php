<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $phone=$_POST['phone'];

    $password=$_POST['pwd'];
    if($name!=='' && $email!=='' &&$phone!=='' && $password!=='') {
    $sql =$database->prepare("insert into users (name,email,number,password) values(:name ,:email,:number,:password)");
    $sql->bindParam("name",$name);
    $sql->bindParam("email",$email);
    $sql->bindParam("number",$phone);
    $sql->bindParam("password",$password);
// can you use bindparam any sql command

$sql->execute();
    }
}

?>
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
<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name"  placeholder="Enter Your Name" required>
  </div>
  <br>

<div class="form-group">
<label for="exampleInputCategory">Category</label>

    <select name="category" id="exampleInputCategory">
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
  <input type="file" id="myfile" name="myfile" multiple><br><br>
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

  </div>
</form>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>