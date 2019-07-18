<?php

function get_catagories() {
    global $link;  //Чтобы вызывать функцию без атрибута $link, берем ее из глобальной области

    $sql = "SELECT * FROM `categories`";    //копируем строку из базы данных. 

    $result = mysqli_query($link, $sql);    //создаем функцию, которая выполнит этот запрос в сторону MySQL сервера.

    // теперь нужно, чтобы функция вернула результат в виде массива.
    // Для этого нужно преобразовать $result в удобочитаемый формат

    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);   //эта функция преобразует код из Базы данных в массив. Вместо MYSQLI_ASSOC можно просто написать 1 

    // прописываем код для проверки получения данных
    // echo '<pre>';
    // var_dump($result);
    // echo '</pre>';
    return $categories;
}

// $categories = get_catagories($link); //т.к. переменная $link находиться в database, она не видна внутри этой функции. Для того, чтобы ее увидет, мы передаем ее в качестве аргумента
// потом вырезаем этот вызов и вставляем в header, вместо массива значений.


function get_posts() {
    global $link;  

    $sql = "SELECT * FROM `posts`"; 

    $result = mysqli_query($link, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC); 

    return $posts;
}


// Функция, чтобы достать конкретный пост из базы данных
function get_post_by_id($post_id) {
    global $link;

    $sql = "SELECT * FROM posts WHERE id = ".$post_id;

    $result = mysqli_query($link, $sql);

    $post = mysqli_fetch_assoc($result);

    return $post;
}


function generate_code($length = 8) {
    $string = '';
    $chars = 'abcdifghijklmnABCDIFGHIJKLMN123456789';
    $num_chars = strlen($chars);

    for( $i = 0; $i < $length; $i++) {
        $string .= substr($chars, rand(0, $num_chars - 1), 1);
    }

    return $string;
}


//Функция, которая вносит подписчиков в базу данных. Использует их почту.
function insert_subscriber($email) {
    global $link;

    $email = mysqli_real_escape_string($link, $email);  //футкция защищяет нашу строку с email, предотвращая различные sql иньекции

    //1. Проверить, есть ли подписчик в таблице subscribers
    $query = "SELECT * FROM subscribers WHERE email = $email";

    

    $result = mysqli_query($link, $query);

    // $num_rows = mysqli_num_rows($result);

    
    if (!$result) {

        //2. Если его нет, то создаем подписчика с уникальным кодом (неактивного)

        $subscriber_code = generate_code();
        // var_dump($subscriber_code);
        // var_dump($email);

        // $insert_query = "INSERT INTO subscribers (email, code) VALUES ('$email', '$subscriber_code')";
        $insert_query = "INSERT INTO `subscribers` (`email`, `code`) VALUES ('$email', '$subscriber_code')";
        // $sql = "INSERT INTO `tstable` (`vall1`, `vall2`, `vall3`, `vall4`) VALUES ('$name', '$email', '$subject', '$text_message')";
        
        $result = mysqli_query($link, $insert_query);

        // var_dump($insert_query);
        var_dump($result);

        ?>
        <pre>
            <?=print_r($result);?>
        </pre>
<?php
        if ($result) {
            return 'created';
        } else {
            return 'fail';
        }

    } else {
        return 'exists';
    }

    

    
}



// UPDATE `subscribers` SET `status` = '1' WHERE `subscribers`.`id` = 1;  - Изменил значение строки