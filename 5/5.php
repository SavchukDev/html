<?php
// 5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
// * Директория и искомое слово задаются как параметры функции

function find_file_in_directory($directory, $word)
{
    $arr = scandir($directory);
    for ($i = 0; $i < count($arr); $i++) {
        $position = strpos($arr[$i], $word);
        if ($position !== false) {
            $result[] = $arr[$i];
         }
    } return $result;
}
print_r(find_file_in_directory(__DIR__, '5'));




