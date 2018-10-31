<?php
require '../../scripts/database_connection.php';
$query_text = $_REQUEST['query'];
$result = mysqli_query($connect, $query_text);
if (!$result){
    die("<p>Ошибка при выполнении SQL - запроса " . $query_text .
    mysqli_error($connect));
}
echo '<p>Результат вашего запроса:';
echo '<ui>';

while($row = mysqli_fetch_row($result)){
    echo "<li>{$row[0]}</li>";
}
echo '</ui>';
?>