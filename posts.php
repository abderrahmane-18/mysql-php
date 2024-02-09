
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
  Add Post
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
   
      <th scope="col">title</th>
      <th scope="col">body</th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php ?></th>
     
      <td><?php  ?></td>
      <td><?php  ?></td>
      <td >
      
      <a class="btn btn-primary" href="<?php  ?>" role="button" style="margin-right:15px;" >Edit</a>
      <a class="btn btn-danger" href="<?php  ?>" role="button" >Delete</a> 
      
    </td>
    </tr>
    <tr>
    
     
  </tbody>
</table> 
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPostModalLabel">Add Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Post Form -->
        <form id="postForm" method="post" action="posts.php">
          <div class="mb-3">
            <label for="postName" class="form-label">Post Name</label>
            <input type="text" name="postName" class="form-control" id="postName" placeholder="Enter post name" required>
          </div>
          <div class="mb-3">
            <label for="postBody" class="form-label">Post Body</label>
            <textarea class="form-control" name="postBody" id="postBody" rows="3" placeholder="Enter post body" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit" id="savePost">Save Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>


<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost;dbname=social-media-php;charset=utf8;", $username, $password);

if (isset($_POST['submit'])) {
    $name_post = $_POST['postName'];
    $name_body = $_POST['postBody'];
  
    $sql = $database->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");
    $sql->bindParam(":title", $name_post);
    $sql->bindParam(":body", $name_body);
    $sql->execute();
}

// Redirect back to the page where the form was submitted
exit();
?>
