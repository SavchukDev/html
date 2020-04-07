<?php
//Гостевая книга

require_once 'func.php';


if (!empty($_POST)) {
    save_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$messages = get_mess();
$messages = array_mess($messages);
//print_arr($messages);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>

<form action="index.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>
    </p>
    <p>
        <label for="text">Text:</label>
        <textarea name="text" id="text"></textarea><br>
    </p>
    <button type="submit">Write</button>

</form>
<hr>
<?php if (!empty($messages)): ?>
    <?php foreach ($messages as $message): ?>
        <?php $message = get_format_message($message); ?>
        <div class="message">
            <p>Author: <?= $message[0] ?> | Date: <?= $message[2] ?> </p>
            <div><?= nl2br(htmlspecialchars($message[1])) ?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
