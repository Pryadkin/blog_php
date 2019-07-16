<!-- Все get параметры, попадают через адресную строку в глобальный массив GET -
Можно посмотреть что записалось внутрь:
<pre>
<?php // print_r($_GET); ?>
</pre>
Это очень ненадежная часть кода. Через нее часло взламывают сайты, использую SQL иньекции. Т.е. прописывая в адресной строке определенный код, и получая нужные данные.
-->

<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$post_id = $_GET['post_id'];
if (!is_numeric($post_id)) exit();  // Если в адресную строку прописать буквы, скрипт не сработает.

require_once 'app/header.php';

//ПОЛУЧАЕМ МАССИВ ПОСТА
$post = get_post_by_id($post_id);
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1><?=$post['title']?></h1>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-list"></i><a href="#">Назначение категории</a> | </li>
                <li class="list-inline-item"><i class="fa fa-calculator"></i>16 июля 2019 21:00 </li>
            </ul>
            <hr>
            <div class="post-content"> <!-- класс придумал свой -->   
                <img class="img-thumbnail float-left" width="300" style="margin-right: 20px;" src="<?=$post['image']?>">             
                <?=$post['content']?>                
            </div>                        
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            sidebar
        </div>
    </div>
</div>