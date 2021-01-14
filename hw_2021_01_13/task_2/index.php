<?php
session_start();
function is_auth(){
    return isset($_SESSION['auth_user']);
}
function get_auth_login(){
    return $_SESSION['auth_user'];
}
//print_r($_POST);
switch (strtolower($_POST['auth_action'])) {
    case 'login' : {
        unset($_SESSION['auth_user']);
        switch (strtolower($_POST['login'])){
            case 'tom' : {
                // 111
                if ($_POST['md5password']=='698d51a19d8a121ce581499d7b701668') {
                    $_SESSION['auth_user'] = $_POST['login'];
                }
                break;
            }
            case 'bob' : {
                // 222
                if ($_POST['md5password']=='bcbe3365e6ac95ea2c0343a2395834dd') {
                    $_SESSION['auth_user'] = $_POST['login'];
                }
                break;
            }
        }
        if (!is_auth()){
            $auth_error = "Некорректные данные.";
        }
        break;
    }
    case 'exit' : {
        unset($_SESSION['auth_user']);
        break;
    }
}
if (is_auth()) {
    if (isset($_SESSION[get_auth_login() . '_last_url'])) {
        $last_url = $_SESSION[get_auth_login() . '_last_url'];
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
    <script type="text/javascript" src="js/md5.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="task_text">
        К задаче с авторизацией добавить две страницы (fact.php, bitrix.php).
        <br>Необходимо запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php).
        <br>После авторизации пользователя, необходимо вывести на экран, какая страница была посещена последней.
    </div>
    <div class="task_code">
        <form class="task_form" action="" method="post" onsubmit="pwd_calc(this);">
            <script>
                function pwd_calc(form)
                {
                    if (form.password.value != '')
                    {
                        form.md5password.value = md5(form.password.value);
                        form.password.value = '';
                    }
                }
            </script>
            <div <?php if(is_auth()){ echo 'class="hide"'; }?>>
                <input type="text" name="login" placeholder="login">
                <input type="password" name="password" placeholder="password">
                <input type="hidden" name="md5password" value="" />
                <button type="submit" name="auth_action" value="login">Войти</button>
                <label> <?php if (isset($auth_error)){echo $auth_error;} ?></label>
            </div>
            <div <?php if(!is_auth()){ echo 'class="hide"'; }?>>
                <label for="">Привет, <?php echo get_auth_login() ?>! </label>
                <button type="submit" name="auth_action" value="exit">Выйти</button>
                <?php if (isset($last_url)){ echo "<label> Последняя посещенная страница $last_url</label>";} ?>
            </div>
        </form>
        <h1>index</h1>
        <p>Покликайте по ссылкам :)</p>
        <a href="bitrix.php">bitrix</a>
        <a href="about.php">about</a>
        <a href="fact.php">fact</a>
    </div>
</div>
</body>
</html>
