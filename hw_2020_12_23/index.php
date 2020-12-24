<?php
$title='Домашняя работа 2020.12.23';
$min_task_id = 1;
$max_task_id = 3;
$task_id = (int)$_GET["task_id"];

if($task_id < $min_task_id || $task_id > $max_task_id) {
    $task_id = 1;
}

include_once("tpl/header.tpl");
include_once("tpl/navigation.tpl");
include_once("pages/task_$task_id.php");
include_once("tpl/footer.tpl");

?>

