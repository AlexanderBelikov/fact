<?php
function str_reverse($str){
    echo strrev($str)."<br>";
}
function run_task()
{
    $str = "HTML, CSS, PHP, BITRIX";
    echo "$str<br>";
    str_reverse($str);
}
?>
<script>
    function str_reverse(str) {
        let rstr = str.split('').reverse().join('');
        document.write(rstr+"<br>");
    }
    function run_task() {
        let str = "HTML, CSS, PHP, BITRIX";
        document.write(str+"<br>");
        str_reverse(str);
    }
</script>

<p class="task_text">
    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
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