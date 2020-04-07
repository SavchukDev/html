<?php
//Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать
// * через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.<

include '3.html';

$words = $_POST['lenght'];

/*
$file_open = fopen("/var/www/example.com/html/3/text.txt", "a");
$my_text = 'Виталик учит меня программированию. Я стану джуном и буду косить бабос. А так же я жду появления племянника моего брата и хочу чтоб его жизнь была ни в чём не ограничена';
$write_file = fwrite($file_open, $my_text);
if ($write_file) {
    echo 'Done!';

} else {
    echo 'Error';
}
fclose($file_open);
*/

$file_content = file_get_contents('/var/www/example.com/html/3/text.txt');
$arr_text = explode(' ', $file_content);
//var_dump($arr_text);
for ($i = 0; $i < count($arr_text); $i++) {
    if (mb_strlen($arr_text[$i]) == $words) {
        unset($arr_text[$i]);
    }
}
file_put_contents('/var/www/example.com/html/3/text.txt', implode(" ", $arr_text));
//var_dump($arr_text);
