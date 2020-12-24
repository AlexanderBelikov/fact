<?php
function run_task()
{
    //    Create array and fill rand values
    $n = 10;
    $arr = array();
    while ($n-- > 0) {
        $arr[] = mt_rand(10, 99);
    }

    //    Out array, every element bold
    $i = 0;
    foreach ($arr as $value) {
        if (!($i++ % 2)) {
            echo "<p><b>$value</b></p>";
        } else {
            echo "<p>$value</p>";
        }
    }
}
?>
<script>
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    function run_task() {
        //    Create array and fill rand values
        const n = 10;
        const arr = [];
        for (let i = 0; i < n; i++) {
            arr.push(randomNumber(10,99));
        }

        //    Out array, every element bold
        arr.forEach(function(value, i) {
            if (!(i%2)){
                document.write('<p><b>' + value + '</b></p>');
            } else {
                document.write('<p>' + value + '</p>');
            }
        });
    }
</script>

<p class="task_text">
    Создать массив размера n, заполненный случайными числами. Вывести каждый элемент массива с новой строки. Все четные
    элементы массива необходимо вывести жирным шрифтом.
</p>
<section class="div__task">
    <div>
        <h4>PHP</h4>
        <?
            run_task();
        ?>
    </div>
    <div>
        <h4>JavaScript</h4>
        <script>
            run_task()
        </script>
    </div>
</section>