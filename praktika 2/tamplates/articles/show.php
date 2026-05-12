<?php require dirname(__DIR__).'/main/header.php';?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $user['nickname']?></h6>
    <p class="card-text"><?=$article['text'];?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<?php require dirname(__DIR__).'/main/footer.php';?>
