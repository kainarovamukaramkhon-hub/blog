<?php require dirname(__DIR__).'/main/header.php';?>

<form article="/Framwork/www/article/store"method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Title</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <input type="text" class="form-control" text="text">
  </div>
  <button type="submit" class="btn btn-primary">Save article</button>
</form>
<?php require dirname(__DIR__).'/main/footer.php';?>