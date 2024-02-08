<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Post</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
  Add Post
</button>

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
        <form id="postForm">
          <div class="mb-3">
            <label for="postName" class="form-label">Post Name</label>
            <input type="text" class="form-control" id="postName" placeholder="Enter post name">
          </div>
          <div class="mb-3">
            <label for="postBody" class="form-label">Post Body</label>
            <textarea class="form-control" id="postBody" rows="3" placeholder="Enter post body"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="savePost">Save Post</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your custom JavaScript -->
<script>
  document.getElementById('savePost').addEventListener('click', function() {
    // Get post details
    var postName = document.getElementById('postName').value;
    var postBody = document.getElementById('postBody').value;
    
    // You can handle the post data here, for example, send it to the server or do something else with it
    
    // Close the modal
    var modal = new bootstrap.Modal(document.getElementById('addPostModal'));
    modal.hide();
  });
</script>

</body>
</html>
