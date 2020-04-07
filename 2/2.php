<?php
// Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
include '2.html';

$words = $_GET('words');

function topWords($words) {
    $words = explode(' ',  $words);
    for ($i = 0; $i < count($words); $i++) {
       for ($j = 0; $j < count($words) - 1; $j++) {
            if (mb_strlen($words[$j]) < mb_strlen($words[$j+1])) {
                //return $words[$j];

            }
        }
    }     return (array_slice($words, 0, 3));

}

var_dump($words);
//print_r(topWords($words));