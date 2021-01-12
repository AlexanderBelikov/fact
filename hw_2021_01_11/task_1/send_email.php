<?php
if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['comment']) && !empty($_POST['comment'])){
    $login = $_POST['login'];
    $comment = $_POST['comment'];
    $message = "$login:\r\n$comment";
    $message = wordwrap($message, 70, "\r\n");
    mail("admin@contoso.com", "Пользователь $login оставил комментарий.", $message);
    $result = "Сообщение успешно отправлено.";
} else {
    $result = "Форма заполнена не корректно.";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="task_code">
        <?php
        echo $result;
        ?>
    </div>
</div>
</body>
</html>
