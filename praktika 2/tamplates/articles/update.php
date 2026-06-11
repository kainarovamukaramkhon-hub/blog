<?php require dirname(__DIR__).'/main/header.php';?>
<h4>Edit article </h4>
<form action="/kaynarovam/praktika%202/www/article/update/<?=$article->getId();?>" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Title</label>
    <input type="text" class="form-control" id="name" name="name" value="<?=$article->getName();?>">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <input type="text" class="form-control" name="text" value="<?=$article->getText();?>">
  </div>
  <button type="submit" class="btn btn-primary">Update article</button>
</form>
<?php require dirname(__DIR__).'/main/footer.php';?>