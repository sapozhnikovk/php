<?php
require 'app_config.php';
$connect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD)
        or die("<p>Ошибка подключенияя к базе данных:" . 
        mysqli_error($connect) . "</p>");
mysqli_select_db($connect, DATABASE_NAME)
        or die("<p>Ошибка подключение к базе" . DATABASE_NAME .
        mysqli_error($connect));
?>