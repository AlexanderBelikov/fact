<?php
function run_task()
{
    $str = "PHP is a general-purpose scripting language.";
    $result = str_replace(array('a', 'b', 'c'), array(1, 2, 3), $str);
    echo "$str<br>";
    echo $result;
}
?>
<script>
    function run_task() {
        let str = "PHP is a general-purpose scripting language.";
        let result = str.replaceAll('a',1).replaceAll('b',2).replaceAll('c',3);
        document.write(str + '<br>');
        document.write(result);
    }
</script>
<p class="task_text">
    Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2,
    а буквы 'c' - на 3.
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