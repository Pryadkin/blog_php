<?php
    require_once 'include/database.php'; // подключаем базу данных
    require_once 'include/function.php'; // подключаем функции для связи с MySQL    
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой блог</title>

    <!-- Bootstrap -->
    <link href="public/libs/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/libs/fontawesome-free-5.9.0-web/css/fontawesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<i class="fas fa-address-book"></i>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Мой блог</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php /*$menu_items = array(
                'Фотография',
                'Путешествия',
                'Авто',
            );
                if (count($menu_items == 0)) {
                    for ($i = 0; $i < count($menu_items); $i++) {
                        echo '<li class="nav-item active">
                        <a class="nav-link" href="#">'.$menu_items[$i].'</a>
                        </li>';
                    }
                  
                } */?>
                

            <?php 
                $categories = get_catagories();
            ?>
            <?php if (count($categories) === 0): ?>
            <li><a class="nav-link" href="#">Добавить категорию</a></li>
            <?php else: ?>

            <?php foreach($categories as $category): ?>
            <li><a class="nav-link" href="/category.php?id=<?=$category["id"]?>"><?=$category["title"]?></a></li>
            <?php endforeach; ?>

            <?php endif; ?>


            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Пункт_1</a>
            </li> -->


            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Пункт_2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Пункт_3</a>              
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Пункт_4</a>
            </li> -->
        </ul>
        
    </div>
    </nav>
 





	<!-- <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Мой блог</a>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <li><a href="#">Пункт 1</a></li>
                    <li><a href="#">Пункт 2</a></li>
                    <li><a href="#">Пункт 3</a></li>
                    <li><a href="#">Пункт 4</a></li>
                </ul> -->
                <!-- <form action="" class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail" value="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Пароль" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i> ВОЙТИ
                    </button>
                </form> -->
            <!-- </div> -->
        <!-- </div> -->
   