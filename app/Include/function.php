<?php

function get_catagories($link) {
    $sql = "SELECT * FROM `categories`";    //копируем строку из базы данных. 

    $result = mysqli_query($link, $sql);    //создаем функцию, которая выполнит этот запрос в сторону MySQL сервера.

    // теперь нужно, чтобы функция вернула результат в виде массива.

    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);   //эта функция преобразует код из Базы данных в массив. Вместо MYSQLI_ASSOC можно просто написать 1 

    // прописываем код для проверки получения данных
    // echo '<pre>';
    // var_dump($result);
    // echo '</pre>';
    return $categories;
}

// $categories = get_catagories($link); //т.к. переменная $link находиться в database, она не видна внутри этой функции. Для того, чтобы ее увидет, мы передаем ее в качестве аргумента/
// потом вырезаем этот вызов и вставляем в нужный код