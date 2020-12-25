<?php
function run_task()
{
    $str = "html css php";
    $arr = explode(' ', $str);
    print_r($arr);
}
?>
<script>
    function run_task() {
        let str = "html css php";
        const arr = str.split(' ');
        document.write('[ '+arr.join(' , ')+' ]');
    }
</script>

<p class="task_text">
    Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
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