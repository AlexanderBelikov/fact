<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<header class="<?=$header_class?>">
    <h1><?=$title?></h1>
</header>
<main>
    <div class='about'>
        <p>Имя</p>
        <p><?=$my_name?></p>
        <p>Возраст</p>
        <p><?=$my_age?></p>
    </div>
    <div class='pi'>
        <p>Число Пи: <?=PI?></p>
    </div>
</main>
</body>
</html>