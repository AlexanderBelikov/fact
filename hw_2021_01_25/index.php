<?php
session_start();
require_once 'class/Auth.php';
require_once 'class/Form.php';

$db_servername = 'localhost';
$db_username = 'fact';
$db_password = '123456';
$db_name = 'db_fact';
$mysqli = @new mysqli($db_servername,$db_username,$db_password,$db_name);

switch (mb_strtolower($_POST['auth_action'])) {
    case 'войти' :
    {
        $auth_result = Auth::authLogin($mysqli, $_POST['login'], $_POST['md5password']);
        if (empty($auth_result)) {
            if (!($mysqli->connect_error)){
                $mysqli->close();
            }
            header("Location: https://fact.digital/");
            exit();
        }
        break;
    }
    case 'выход' :
    {
        Auth::authLogout();
        break;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fact-style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/md5.js"></script>
</head>
<body>

<header class="header ">
    <div id="main-background" class="main-background" data-main-background="">
        <canvas id="stars" class="b-canvas scroll-scale" data-stars="" width="1600" height="856"
                style="--animation:1; display: block; opacity: 1;"></canvas>
        <canvas id="gradient" class="b-canvas b-canvas--gradient ty" data-gradient="" width="1600"
                height="913"></canvas>
    </div>
</header>

<main>
    <form action="" method="post" onsubmit="pwd_calc(this);">
        <script>
            function pwd_calc(form) {
                if (form.password.value != '') {
                    form.md5password.value = md5(form.password.value);
                    form.password.value = '';
                }
            }
        </script>
        <div class="form-item">
            <div class="b-logo b-logo--empty">
                <svg class="i-icon i-icon--logo" viewBox="0 0 116 34.865139">
                    <path d="M1 8.1l6.5-6.5c.4-.4-.1-.9-.6-.7-.6.1-4.7 1.3-5.4 1.5-.6.1-1.5.8-1.5 1.4v3.8c0 .5.5 1 1 .5zM1 17c.4-.5 15.2-15.2 15.9-15.9.7-.7 0-1.1-.6-1.1s-3.2.1-3.7.1-1.1.4-1.3.7C11 1 .8 11.2.6 11.4c-.2.2-.6.6-.6 1.2v3.8c0 .6.5 1.1 1 .6zM24.2 1.4c-.7-.2-2.4-.7-3-.7-.6 0-1 .4-1.2.6l-19 19c-.3.2-1 .7-1 1.9s.2 1.5.3 2.6c.1 1.1 1 1 1.7.4L24.8 2.4c.4-.4.1-.8-.6-1zm4.6 6.3c.4-.4.6-1 .6-1.6V3.6s-1.1-1.3-2-.5L3.7 26.8c-.9.9-.6 1.6 0 2 .6.4.9.8 1.8 1.2.9.4 1.2-.2 1.4-.4zm-.7 4c-.5.5-18.6 18.5-19.2 19.2-.7.7-.4 1.2.1 1.5.5.3 1.9 1.2 2.5 1.2.6 0 .8-.1 1-.3l16.2-16.2c.2-.2.6-.6.6-1.2v-3.8c.1-.7-.5-1.1-1.2-.4zm.2 8.8c-.9.8-12.7 12.7-13.3 13.2-.6.6-.6 1.4.4 1.1 1-.4 13.9-5.8 13.9-11.3v-2.4c0-.9-.5-1.2-1-.6z"
                          fill="#de000f"></path>
                    <g fill="#fff">
                        <path d="M79 10.1H62.2c-.3 0-.5.2-.5.5v13.2c0 .3.2.5.5.5h2.6c.4 0 .5-.3.5-.5V23c0-.3.2-.5.4-.5h9.9c.3 0 .5.2.5.5v.9c0 .2.2.5.5.5h2.5c.3 0 .5-.2.5-.5V10.6c-.1-.3-.3-.5-.6-.5zm-2.9 8.3c0 .4-.4.8-.8.8H66c-.4 0-.8-.4-.8-.8v-3.8c0-.4.4-.8.8-.8h9.3c.4 0 .8.4.8.8zm39-8.3H102c-.3 0-.5.1-.6.2-.1.1-2.7 2.6-2.9 2.9-.3.3-.2.5.2.5h5.9c.3 0 .5.2.5.5v9.5c0 .2.2.6.6.6h2.4c.4 0 .6-.4.6-.7v-9.1c0-.6.2-.8.8-.8h5.6c.6 0 .9-.3.9-.8V11c0-.7-.4-.9-.9-.9zm-55.7 0H38.8c-.2 0-.5.2-.5.5V22c0 .4.3.5.5.5h8.5V24c0 .3.2.4.4.4h2.8c.3 0 .4-.2.4-.4v-1.4h8.3c.4 0 .6-.1.6-.3V10.6c0-.2-.1-.5-.4-.5zm-12 8.3c0 .4-.4.8-.8.8h-3.8c-.4 0-.8-.4-.8-.8v-3.8c0-.4.4-.8.8-.8h3.8c.4 0 .8.4.8.8zm8.9 0c0 .4-.4.8-.8.8h-3.8c-.4 0-.8-.4-.8-.8v-3.8c0-.4.4-.8.8-.8h3.8c.4 0 .8.4.8.8z"></path>
                        <path d="M92.6 17.7c-.2-.2-.2-.6 0-.8l6.2-6.2c.3-.3.2-.5-.6-.5h-3.7c-.2 0-.6.1-.7.2-.2.2-7.9 7.8-8.1 8.1-.3.3-.7.3-.7 0v-7.7c0-.3-.1-.6-.5-.6H82c-.4 0-.5.3-.5.5v13.2c0 .2.2.5.5.5h3c.2 0 .6-.4.6-.4l3.6-3.6c.2-.2.7-.2.9 0 .2.2 3.3 3.2 3.6 3.6.4.4.7.4.9.4h4.2c.5 0 .2-.4 0-.7-.4-.2-6-5.8-6.2-6z"></path>
                    </g>
                </svg>
            </div>
        </div>

        <?php
            if (Auth::isAuth()){
                echo "<div class='form-item'>".Form::input(['type'=>'text', 'readonly'=>null, 'value'=>Auth::getUserFullName()])."</div>";
                echo "<div class='form-item'>".Form::input(['type'=>'text', 'readonly'=>null, 'value'=>Auth::getUserAge()])."</div>";
                echo "<div class='form-item'>".Form::submit(['name'=>'auth_action', 'value'=>'выход'])."</div>";
            } else {
                echo "<div class='form-item'>".Form::input(['type'=>'text', 'name'=>'login', 'placeholder'=>'login (tom,bob)', 'autocomplete'=>'off'])."</div>";
                echo "<div class='form-item'>".Form::password(['name'=>'password', 'placeholder'=>'password (111,222)', 'autocomplete'=>'off'])."</div>";
                echo Form::input(['type'=>'hidden', 'name'=>'md5password', 'value'=>'']);
                echo "<div class='form-item'>".Form::submit(['name'=>'auth_action', 'value'=>'войти'])."</div>";
            }
        ?>

        <div class="form-item">
            <?php if (!empty($auth_result)): ?>
                <label> <?php echo $auth_result ?></label>
            <?php endif; ?>
        </div>
    </form>
</main>

<script type="text/javascript" src="js/fact.js"></script>
</body>
</html>

<?php
if (!($mysqli->connect_error)){
    $mysqli->close();
}
?>