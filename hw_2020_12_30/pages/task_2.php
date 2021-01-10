<?php
function words_count($sentence){
    return count(explode(' ',$sentence));
}
function run_task()
{
    $str = "HTML, CSS, PHP, BITRIX";
    $count = words_count($str);
    echo "В строке «".$str."» $count слов(а).<br>";
}
?>
<script>
    function words_count(sentence) {
        return sentence.split(' ').length;
    }
    function run_task() {
        let str = "HTML, CSS, PHP, BITRIX";
        let count = words_count(str);
        document.write("В строке «"+str+"» "+count+" слов(а).<br>");
    }
</script>
<p class="task_text">
    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.
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