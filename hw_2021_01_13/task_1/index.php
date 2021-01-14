<?php
session_start();

switch ($_POST['action']) {
    case 'set' : {
        if (isset($_POST['name']) && isset($_POST['value'])
            && !empty($_POST['name']) && !empty($_POST['value'])) {
            $_SESSION[$_POST['name']]=$_POST['value'];
        }
        break;
    }
    case 'reset' : {
        session_unset();
        break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="task_text">
        Удалить сессию при помощи специальной функции.
    </div>
    <div class="task_code">
        <form class="task_form" action="" method="post">
            <label for="name">$_SESSION[</label>
            <input type="text" name="name">
            <label for="value">] = </label>
            <input type="text" name="value">
            <button type="submit" name="action" value="set">Set</button>
            <button type="submit" name="action" value="reset">Reset</button>
        </form>
        <?php
            foreach(array_keys($_SESSION) as $key) {
                echo $key." = ".$_SESSION[$key]."<br>";
            }
        ?>
    </div>
</div>
</body>
</html>
