<?php
$string_to_search = "Martin OMC-28LJ";
$regex = "/OM/";
$num_matches = preg_match($regex, $string_to_search);
if ($num_matches > 0){
    echo 'Соответствие найдено!';
} else {
    echo 'Соответсвтй не найдено';
}
?>