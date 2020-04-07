<?php
/**
 * Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 * //перебрать массивы $a,$b(explode)
 * сравнить масив
 * если совпадение вернуть резальт
 *
 */

include 'form.html';

$firstText = $_GET['first'];
$secondText = $_GET['second'];


function getCommonWords($a, $b)
{
    $a = explode(' ', $a);
    $b = explode(' ', $b);

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($b); $j++) {
            if ($a[$i] == $b[$i]) {
                $result[] = $a[$i];
            }
        }
    }
    if ($result) {
        return print_r($result);
    } else {
        throw new Exception('No common words');
    }
}

try {
    getCommonWords($firstText, $secondText);
} catch (Exception $e) {
    echo 'Выброшено исключение: ', $e->getMessage();
}

