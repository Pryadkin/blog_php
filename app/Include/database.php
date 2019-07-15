<?php 

$link = mysqli_connect('localhost', 'root', '', 'my_first_blog'); //новый модуль подключения к базе данных. i в конце - improved (улучшенная)

// Проверка, подключились или нет
// .mysqli_connect_errno() - //возвращаяет номер ошибки
// .mysqli_connect_error() - //возвращает текст ошибки
// exit() - останавливает дальнейшее выполнение php скриптов
// Список кодов ошибок MySQL: http://allerrorcodes.ru/mysql/

if (mysqli_connect_error()) {
    echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}