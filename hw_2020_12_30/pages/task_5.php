<?php
function str_wrap($str){

    foreach ( str_split($str) as $char){
        echo "$char<br>";
    }
}
function run_task()
{
    $str = "HTML, CSS, PHP, BITRIX";
    echo "$str<br>";
    echo "<br>";
    str_wrap($str);
}
?>
<script>
    function str_wrap(str) {
        str.split('').forEach(function (value) {
            document.write(value+"<br>");
        })
    }
    function run_task() {
        let str = "HTML, CSS, PHP, BITRIX";
        document.write(str+"<br>");
        document.write("<br>");
        str_wrap(str);
    }
</script>

<p class="task_text">
    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет каждую букву на новую строку
</p>
<section class="div__task">
    <div>
        <h4>PHP</h4>
        <div class="result">
            <?
            run_task();
            ?>
        </div>
    </div>
    <div>
        <h4>JavaScript</h4>
        <div class="result">
            <script>
                run_task()
            </script>
        </div>
    </div>
</section>