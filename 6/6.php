<?php
//Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны
// * помещаться в папку gallery и выводиться на странице в виде таблицы
//include '6.html';

/*if (!isset($_POST['submit'])) {
    require_once '6.html';
    exit;
}*/

/*if (!empty($_POST)) {
    header("Location: {$_SERVER['PHP_SELF']}");
}

    function save_name($data) {
        return file_put_contents('name_image.txt', serialize($data));
    }
function get_name()
{
    return unserialize(file_get_contents('name_image.txt'));
}
if (file_exists('name_image.txt')) {
    $result = get_name();
}
$form_was_send = false;
if (isset($_POST['submit'])) {
    $form_was_send = true;
    if (is_dir('gallery') == false) {
        if (mkdir('gallery') == false) {
            throw new Error('Didnt create folder;');
        };
    }

    foreach ($_FILES["photo"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $allow_type = ALLOWS_TYPE[$_FILES['photo']['type'][$key]];
            if (!isset($allow_type)) {
                throw new Error('PLEASE IMAGE;');
            }
            $tmp_name = $_FILES["photo"]["tmp_name"][$key];
            $name = $_FILES["photo"]["name"][$key] . time();
            move_uploaded_file($tmp_name, 'gallery' . DIRECTORY_SEPARATOR . $name);
        } else {
            throw new Error('PLEASE select file;');
        }
        $result[] = $name;
    }
    save_name($result);
}

require_once '6.html';*/

if (!empty($_POST)) {
    header("Location: {$_SERVER['PHP_SELF']}");
}

function save_name($data) {
    return file_put_contents('name_image.txt', serialize($data));
}
function get_name()
{
    return unserialize(file_get_contents('name_image.txt'));
}
if (file_exists('name_image.txt')) {
    $result = get_name();
}
function form ($form_was_send) {
$form_was_send = false;
if (isset($_POST['submit'])) {
    $form_was_send = true;
    if (is_dir('gallery') == false) {
        if (mkdir('gallery') == false) {
            throw new Error('Didnt create folder;');
        };
    }
}

    foreach ($_FILES["photo"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $file_type = $_FILES['photo']['type'][$key];
            if (!isset($file_type)) {
                throw new Error('PLEASE IMAGE;');
            }
            $tmp_name = $_FILES["photo"]["tmp_name"][$key];
            $name = $_FILES["photo"]["name"][$key] . time();
            move_uploaded_file($tmp_name, 'gallery' . DIRECTORY_SEPARATOR . $name);
        } else {
            throw new Error('PLEASE select file;');
        }
        $result[] = $name;
    }
    save_name($result);
}

require_once '6.html';