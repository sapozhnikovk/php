<?php
require '../../scripts/app_config.php';
    $connect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD)
        or die("<p>Ошибка подключения к базе данных: " .
            mysqli_error($connect) . "</p>");
    echo "<p>Вы подключились к базе </p>";
    mysqli_select_db($connect, DATABASE_NAME)
        or die("<p>Ошибка при выборе базы.</p>" .
                mysqli_error($connect) . "</p>");
    echo 'Вы подключены к базе ' . DATABASE_NAME;
    $result = mysqli_query($connect, "show tables;");
    if (!$result){
        die("<p>Ошибка при выводе таблиц: " . mysqli_error($connect));
    }
    echo '<p>Таблицы имеющиеся в базе данный:</p>';
    echo '<ui>';
    while ($row = mysqli_fetch_row($result)){
        echo "<li>Таблица: {$row[0]}</li>";
    }
    echo '</ui>';

    ?>
