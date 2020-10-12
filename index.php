<?php
require_once 'app/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1>Все записи:</h1>
            </div>  
            <?php $posts = get_posts();?>
            <?php foreach ($posts as $post):?>
            <div class="card mb-3" style="max-width: 1040px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="admin/img/posts/<?=$post['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><a href="post.php?post_id=<?=$post['id'];?>"><?=$post['title']?></a></h5>
        <p class="card-text"><?=mb_substr($post['content'], 0, 128, 'UTF-8').'...'?></p>
        <p class=><a class="btn btn-dark" href="post.php?post_id=<?=$post['id'];?>">Читать больше</a></p>
        <p class="card-text"><small class="text-muted"><?=$post['datatime'];?></small> <small class="text-muted">Категория</small></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
        </div>
        <div class="col-md-3">
            <?php require_once('app/sidebar.php'); ?>
              <form name="search" method="post" action="search.php">
      <input type="search" name="query" placeholder="Поиск">
      <button type="submit">Найти</button> 
  </form> 
        </div>
    </div>
</div>

<?php
require_once 'app/footer.php';
?>
