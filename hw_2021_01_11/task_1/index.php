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
    <div class="task_text">
        Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
        <br>*Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку C:\OpenServer\userdata\temp\email
    </div>
    <div class="task_code">
        <form class="task_form" action="send_email.php" method="post">
            <p>
                <label for="login">Login: </label>
                <input type="text" name="login" required>
            </p>
            <p>
                <label for="comment">Comment: </label>
                <textarea name="comment" required></textarea>
            </p>
            <button type="submit">send</button>
        </form>
    </div>
</div>
</body>
</html>

