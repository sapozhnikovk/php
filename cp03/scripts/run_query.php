<?php
require '../../scripts/database_connection.php';
$query_text = $_REQUEST['query'];
$result = mysqli_query($connect, $query_text);
if (!$result){
    die("<p>Ошибка при выполнении SQL - запроса " . $query_text .
    mysqli_error($connect));
}
//echo '<p>Результат вашего запроса:';
//echo '<ui>';

//while($row = mysqli_fetch_row($result)){
//    echo "<li>{$row[0]}</li>";
//}
//echo '</ui>';
/*
$return_row = FALSE;
$uppercase_query_text = trim(strtoupper($query_text));
$location = strpos($uppercase_query_text, "CREAT");
if ($location === false ||
        $location > 0){
    $location = strpos($uppercase_query_text, "INSERT");
    if ($location === false ||
            $location > 0){
        $location = strpos($uppercase_query_text, "UPDATE");
        if ($location === FALSE ||
                $location > 0){
            $location = strpos($uppercase_query_text, "DELETE");
            if ($location === FALSE ||
                    $location > 0){
                $location = strpos($uppercase_query_text, "DROP");
                if ($location === FALSE ||
                        $location > 0){
                    $return_row = TRUE;
                }
            }
        }
    }
}
 */
$return_rows = TRUE;
if (preg_match("/(CREATE|INPUT|UPDATE|DELETE|DROP)/", strtoupper($query_text))){
    $return_rows = false;
}
if ($return_row) {
    echo '<p>Результат вашего запроса:</p>';
    echo '<ul>';
    while ( ($row = mysqli_fetch_row($result))){
        echo "<li>{$row[0]}</li>";
    }
    echo '</li>';
} else {
        echo '<p>Следующий запрос был обработан успешно:</p>';
        echo "<p>{$query_text}</p>";
    
}
?>