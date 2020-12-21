<?php
$title='Домашняя работа 2020.12.21_1';
$my_name = "Александр";
$my_age = 38;
define("PI", M_PI);
$current_hour = date('H');
$is_day = ($current_hour >= 8 && $current_hour < 20);
$header_class = $is_day ? 'day' : 'night';
include_once("tpl/index.tpl");
?>

