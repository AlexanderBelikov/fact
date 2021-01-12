<?php
    $yes_array = array(3, 9, 10, 13, 14, 19);
    $no_array = array(1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18);
    $result = 0;
    $name = $_POST['name'];
    for($i=1; $i<count($_POST); $i++){
        if (in_array($i, $yes_array) && $_POST[$i] == 1){
            $result++;
        }
        if (in_array($i, $no_array) && $_POST[$i] == 0){
            $result++;
        }
    }
    $message = "";
    switch ($result) {
        case $result > 15 : {
            $message = ucfirst($name).', у Вас покладистый характер.';
            break;
        }
        case $result >= 8 : {
            $message = ucfirst($name).', Вы не лишены недостатков, но с вами можно ладить.';
            break;
        }
        default : {
            $message = ucfirst($name).', Вашим друзьям можно посочувствовать.';
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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="task_code">
        <?php
            echo $message;
        ?>
    </div>
</div>
</body>
</html>
