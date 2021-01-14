<?php
session_start();
function is_auth(){
    return isset($_SESSION['auth_user']);
}
function get_auth_login(){
    return $_SESSION['auth_user'];
}

if (is_auth()){
    if (isset($_SESSION[get_auth_login().'_last_url'])){
        $last_url = $_SESSION[get_auth_login().'_last_url'];
    }
    $_SESSION[get_auth_login().'_last_url'] = basename(__FILE__);
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
        К задаче с авторизацией добавить две страницы (fact.php, bitrix.php).
        <br>Необходимо запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php).
        <br>После авторизации пользователя, необходимо вывести на экран, какая страница была посещена последней.
    </div>
    <div class="task_code">
        <form class="task_form" action="index.php" method="post">
            <div <?php if(!is_auth()){ echo 'class="hide"'; }?>>
                <label>Привет, <?php echo get_auth_login() ?>! </label>
                <button type="submit" name="auth_action" value="exit">Выйти</button>
                <?php if (isset($last_url)){ echo "<label> Последняя посещенная страница $last_url</label>";} ?>
            </div>
        </form>
        <h1>bitrix</h1>
        <p>Покликайте по ссылкам :) и возвращайтесь <a href="index.php">index</a></p>
        <a href="bitrix.php" class="active">bitrix</a>
        <a href="about.php">about</a>
        <a href="fact.php">fact</a>
    </ul>
    </div>
</div>
</body>
</html>