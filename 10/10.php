<?php
// Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
// * Текст должен вводиться с формы.
require_once '10.html';

$str = $_POST['str'];

function unique_words($str)
{
    $arr = explode(' ', $str);
    $arr = array_unique($arr);
    $arr = implode(' ', $arr);
    return $arr;
}

print_r(unique_words($str));