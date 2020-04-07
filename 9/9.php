<?php
// Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
// * Ввод текста реализовать с помощью формы.</p>
require_once '9.html';

$str = $_POST['str'];

function reverce($str)
{
    return strrev($str);

}

print_r(reverce($str));
