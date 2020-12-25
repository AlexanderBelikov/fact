<?php
function run_task()
{
    $str = "abc abc abc";
    $last_pos = strlen($str) - strpos(strrev($str), 'b') - 1;
    echo $last_pos;
}
?>
<script>
    function run_task() {
        let str = "abc abc abc";
        let $last_pos = str.lastIndexOf('b');
        document.write($last_pos);
    }
</script>

<p class="task_text">
    Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
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