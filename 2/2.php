<?php
// Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
include '2.html';

$words = $_GET['words'];

function topWords($words)
{
    $arr_lenght = [];
    $words = explode(' ', $words);
    for ($i = 0; $i < count($words); $i++) {
        $arr_lenght[$words[$i]] = strlen($words[$i]);
        //print_r($arr_lenght);
        arsort($arr_lenght);
    } var_dump(array_slice($arr_lenght, 0, 3));;
}

print_r(topWords($words));