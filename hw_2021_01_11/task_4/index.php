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
        Создайте форму генерации ссылки с параметром:
        <li>Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4</li>
        <li>При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.</li>
    </div>
    <div class="task_code">
        <form class="task_form" action="phpcourse.php" method="get">
            <label for="lab">Выберите ссылку: </label>
            <select name="lab">
                <option selected value="1">Лаб1</option>
                <option value="2">Лаб2</option>
                <option value="3">Лаб3</option>
                <option value="4">Лаб4</option>
            </select>

            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
</body>
</html>

