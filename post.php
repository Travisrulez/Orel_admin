<?php
$post_id = $_GET['post_id'];
if (!is_numeric($post_id)) exit();
require_once 'app/header.php';
$post = get_post_by_id($post_id);
?>
<div class="container" style="background-image: url(admin/img/posts/<?=$post['img']?>);">
    <div class="row">
        <div class="col-md-9">
        <div class="page-header">
                <h1><?=$post['title']?></h1>
            </div>  
            <p class="card-text"><small class="text-muted">17 октября 2002</small> <small class="text-muted">Категория</small></p>
            <div class="post-conten">
            <?=$post['content']?>
            </div>
        </div>
        <div class="col-md-3">
            Sidebar
        </div>
    </div>
</div>
<?php
require_once 'app/footer.php';
?>