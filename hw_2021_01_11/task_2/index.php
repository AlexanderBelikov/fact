<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <script type="text/javascript"
            src="js/md5.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="task_text">
        Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
    </div>
    <div class="task_code">
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
        <form class="task_form" action="login.php" method="post" onsubmit="pwd_calc(this);">
            <p>
                <label for="login">Login: </label>
                <input type="text" name="login" required>
            </p>
            <p>
                <label for="password">Password: </label>
                <input type="text" name="password" required>
                <input type="hidden" name="md5password" value="" />
            </p>
            <button type="submit">login</button>
        </form>
    </div>
</div>
</body>
</html>

