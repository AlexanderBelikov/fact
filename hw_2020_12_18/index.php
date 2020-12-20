<?php
$owl_count = 5;
$my_name = "Александр";
$my_age = 38;
define("PI", M_PI);
$current_hour=date('H');
if ($current_hour >= 20 || $current_hour < 8) {
    $greeting = "Доброй ночи!";
    $img_class = "night";
    $header_class = "night_header";
} else {
    $greeting = "Добрый день!";
    $img_class = "day";
    $header_class = "day_header";
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
    <title>Домашняя работа 2020.12.18</title>
</head>
<body>
<?php
echo "<header class='$header_class'>";
echo "<h1>Домашняя работа 2020_12_18</h1>";
echo "</header>";
echo "<div class='owls'>";
echo "<p>Cовы в кавычках:</p>";
echo "<p>$owl_count сов</p>";
echo '<p>$owl_count сов</p>';
echo "</div>";

echo "<div class='info'>";
echo "<p>Имя</p>";
echo "<p>$my_name</p>";
echo "<p>Возраст</p>";
echo "<p>$my_age</p>";
echo "</div>";

echo "<div class='pi'>";
echo "<p>Число Пи: " . PI . "</p>";
echo "</div>";

echo "<div class='time_of_day'>";
echo "<p>$greeting</p>";
echo "<img class='$img_class'/>";
echo "</div>";
?>
</body>
</html>
