<?php
$title='Домашняя работа 2020.12.30';
$task_id = (int)$_GET["task_id"];
if (!file_exists("pages/task_$task_id.php")){
    $task_id = 1;
}

include_once("tpl/header.php");
include_once("tpl/navigation.php");
include_once("pages/task_$task_id.php");
include_once("tpl/footer.php");

?>

