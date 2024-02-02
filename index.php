<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">


<form action="" method="post">
<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name"  placeholder="Enter Your Name">
  </div>
  <br>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone" placeholder="phone">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php 
$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=food_db;charset=utf8;",$username,$password);
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $phone=$_POST['phone'];

    $password=$_POST['pwd'];
    $sql =$database->prepare("insert into users (name,email,number,password) values('$name' ,'$email',$phone,$password)");
$sql->execute();

}

/*if($database)
  //  echo 'connection succesfully';
else 
echo 'failed';
*/


?>
