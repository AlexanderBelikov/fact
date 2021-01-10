<?php
function str_length($str){
    $len = strlen($str);
    echo "Длина строки - $len<br>";
}
function run_task()
{
    $str = "HTML, CSS, PHP, BITRIX";
    echo "$str<br>";
    str_length($str);
}
?>
<script>
    function str_length(str) {
        let len = str.length;
        document.write("Длина строки - "+len+"<br>");
    }
    function run_task() {
        let str = "HTML, CSS, PHP, BITRIX";
        document.write(str+"<br>");
        str_length(str);
    }
</script>

<p class="task_text">
    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет на экран длину строки.
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