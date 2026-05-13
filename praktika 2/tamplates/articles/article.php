<?php require dirname(__DIR__).'/main/header.php';?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Date</th>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $article):?>
    <tr>
      <th scope="row"></th>
      <td><?php echo date('Y-m-d H:i:s');?></td>
      <td><a href="article/<?=$article->getId();?>"><?=$article->getName();?></td></a>
      <td><?=$article->getText();?></td>
      <td><?=$article->getAuthorId();?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<?php require dirname(__DIR__).'/main/footer.php';?>