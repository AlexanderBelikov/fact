<?php
    $login = $_POST['login'];
    $password = $_POST['md5password'];

    switch (strtolower($login)) {
        case 'user' : {
            // 123
            $success = ($password === "202cb962ac59075b964b07152d234b70");
            break;
        }
        case 'admin' : {
            // qwe
            $success = ($password === "76d80224611fc919a5d54f0ff9fba446");
            break;
        }
    }

    if (isset($success)){
        if ($success){
            $result = "Привет, $login !";
        } else {
            $result = "Не верный пароль.";
        }
    } else {
        $result = "Пользователь $login не зарегистрирован.";
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
