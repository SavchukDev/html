<?php
// Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
//Пример:<br><br>
//Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
//Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'

/*$ordinary_str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
$ordinary_str = explode('.', $ordinary_str);
$ordinary_str = array_filter($ordinary_str);
krsort($ordinary_str);
//print_r($ordinary_str);

foreach ($ordinary_str as $key => $value) {
    echo $value. ' .' . "<br>";
}*/

$ordinary_str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
$ordinary_str = explode('.', $ordinary_str);

function reverse_array($ordinary_str)
{
    for ($i = 0; $i < count($ordinary_str); $i++) {
        $reverse_str = array_reverse($ordinary_str);
    }
    return $reverse_str;
}

print_r(reverse_array($ordinary_str));