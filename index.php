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
            <?php require_once 'app/include/sidebar.php'; ?>
        </div>

        <?php 
            $posts = get_posts();
        ?>

        <?php foreach ($posts as $post): ?>
        
        <div class="row col-md-9">
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                    
                    <img class="img-thumbnail" src="<?=$post["image"]?>" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <h4><a href="/post.php?post_id=<?=$post['id']?>"><?=$post["title"]?></a></h4>
                    <p>
                    <!-- Обрезаем текст. Чтобы не было ошибки шрифтов (в конце вопросительный знак), запишем функцию 
                    substr($post["content"], 0, 128) по другому-->
                        <?=strlen($post["content"]) > 250 
                        ? mb_substr($post["content"], 0, 250, 'UTF-8').'...' 
                        : $post["content"] ?>  
                    </p>
                    <p>
                        <a class="btn-info btn-sm" href="/post.php?post_id=<?=$post['id']?>">
                            Read more
                        </a>
                    </p>
                    <br/>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-list"></i><a href="#">Назначение категории</a> | </li>
                        <li class="list-inline-item"><i class="fa fa-calculator"></i>16 июля 2019 21:00 </li>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>

    </div>
</div>


<?php
require_once 'app/footer.php';
?>



