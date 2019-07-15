<?php
    require_once 'include/database.php'; // подключаем базу данных
    require_once 'include/function.php'; // подключаем функции для связи с MySQL
?>

<?php

// Функции ниже выводят все возможные ошибки
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'app/header.php';
require_once 'app/footer.php';