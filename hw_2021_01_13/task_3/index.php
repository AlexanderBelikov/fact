<?php
session_start();
function is_auth(){
    return isset($_SESSION['auth_user']);
}
function get_auth_login(){
    return $_SESSION['auth_user'];
}
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

if (isset($_POST['bc_id'])){
    $bc_id = $_POST['bc_id'];
    if (is_auth()) {
        $_SESSION[get_auth_login().'_bc_id'] = $bc_id;
    }
} else {
    if (is_auth() && isset($_SESSION[get_auth_login().'_bc_id'])) {
        $bc_id = $_SESSION[get_auth_login().'_bc_id'];
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
<body <?php if(isset($bc_id)){echo 'class="bc_'.$bc_id.'"';}?> >
<div class="wrapper">
    <div class="task_text">
        Создайте список с выпадающим цветом. Задний фон сайта должен окрашиваться в выбранный цвет из списка.
        <br>Если пользователе покинет сайт и заново войдет, нужно окрасить сайт в тот цвет,
        <br>который был выбран последним.
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
                <p>tom/111 ; bob/222</p>
            </div>
            <div <?php if(!is_auth()){ echo 'class="hide"'; }?>>
                <label for="">Привет, <?php echo get_auth_login() ?>! </label>
                <button type="submit" name="auth_action" value="exit">Выйти</button>
                <?php if (isset($last_url)){ echo "<label> Последняя посещенная страница $last_url</label>";} ?>
            </div>
        </form>
        <form action="" method="post">
            <select name="bc_id" <?php if(isset($bc_id)){echo 'class="bc_'.$bc_id.'"';} ?> onchange="this.form.submit();">
                <?php
                    for ($i=1; $i<10; $i++){
                        if(isset($bc_id) && $bc_id==$i){
                            echo '<option value="'.$i.'" class="bc_'.$i.'" selected>'.$i.'</option>';
                        } else {
                            echo '<option value="'.$i.'" class="bc_'.$i.'">'.$i.'</option>';
                        }
                    }
                ?>
            </select>
        </form>
    </div>
</div>
</body>
</html>
