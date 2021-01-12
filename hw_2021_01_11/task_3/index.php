<?php
$filename = "test.txt";
$file = file_get_contents($filename);
$tests_array = array();
foreach (explode(PHP_EOL, $file) as $value) {
    $test_split = explode('.', $value, 2);
    $id = (int)($test_split[0]);
    $tests_array[$id] = $test_split[1];
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
    <div class="task_text">
        Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По
        умолчанию задайте везде значение «да».
        Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13,
        14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Посчитайте сумму набранных
        баллов:
        <li>если она оказалась более 15, то результат: «У Вас покладистый характер»;</li>
        <li>если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;</li>
        <li>если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».</li>
        Отобразите на экране имя анкетируемого, фразу-результат анкетирования.

    </div>
    <div class="task_code">
        <form class="task_form" action="check.php" method="post">
            <p>
                <label for="name">Ваше имя: </label>
                <input type="text" name="name" required>
            </p>
            <div class="task_grid">
                <div class="grid-item">№</div>
                <div class="grid-item">Вопрос</div>
                <div class="grid-item">Да</div>
                <div class="grid-item">Нет</div>
                <?php
                    foreach (array_keys($tests_array) as $key){
                        echo '<div class="grid-item"><label>'.$key.'</label></div>';
                        echo '<div class="grid-item"><label class="question_test">'.$tests_array[$key].'</label></div>';
                        echo '<div class="grid-item item-green"><input class="radio-item" type="radio" value="1" checked="checked" name="'.$key.'"></div>';
                        echo '<div class="grid-item item-red"><input class="radio-item" type="radio" value="0" name="'.$key.'"></div>';
                    }
                ?>
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
</body>
</html>

