<?php

// Функции ниже выводят все возможные ошибки
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'app/header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1>Все записи:</h1>
            </div>
        </div>
        <div class="col-md-3">
            sidebar
        </div>

        <?php 
            $posts = get_posts();
        ?>

        <?php foreach ($posts as $post): ?>
        
        <div class="row col-md-12">
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                    
                    <img class="img-thumbnail" src="<?=$post["image"]?>" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <h4><a href="#"><?=$post["title"]?></a></h4>
                    <p>
                        <?=$post["content"]?>
                    </p>
                    <p><a class="btn-info btn-sm" href="#">Read more</a></p>
                <br/>
                    <ul class="list-inline">
                        <li><i class="fas fa-address-book"></i><a href="#">Назначение категории</a> | </li>
                        <li><i class="fa fa-calendar"></i>16 июля 2019 21:00 | </li>
                        <li><i class="glyphicon glyphicon-share"></i> by <a href="#">39 shares</a> | </li>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>

    </div>
</div>


<?php
require_once 'app/footer.php';
?>



