<?php
function run_task()
{
    //    Create array and fill rand values
    $value_count = mt_rand(10, 50);
    $arr = array();
    while ($value_count-- > 0) {
        $x = mt_rand(0, 9);
        $y = mt_rand(0, 9);
        $v = mt_rand(0, 9);
        $arr[$x][$y] = $v;
    }

    //    Out array
    echo '<ul>';
    echo '<li>count: '.count($arr);
    echo '<ul>';
    $count = 0;
    foreach ($arr as $sub_arr) {
        echo '<li>count: '.count($sub_arr).'; array: ['.join(',', $sub_arr).']';
        $count += count($sub_arr);
    }
    echo '</ul>';
    echo '</li>';
    echo '<li>elements count: '.$count.'</li>';
    echo '</ul>';
}
?>
<script>
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    function run_task() {
        //    Instead array used objects :) sorry
        let value_count = randomNumber(10,50);
        const arr = {};
        while (value_count-- > 0) {
            let x = randomNumber(0,9);
            let y = randomNumber(0,9);
            let v = randomNumber(0,9);
            if (!(x in arr)){
                arr[x] = {};
            }
            arr[x][y] = v;
        }

        // Out result
        document.write('<ul>');
        document.write('<li>count: '+Object.keys(arr).length);
        document.write('<ul>');
        let count = 0;
        Object.values(arr).forEach(function(sub_arr) {
            document.write('<li>count: '+Object.values(sub_arr).length+'; array: ['+Object.values(sub_arr).join(',')+']');
            count += Object.values(sub_arr).length;
        });
        document.write('</ul>');
        document.write('</li>');
        document.write('<li>elements count: '+count+'</li>');
        document.write('</ul>');
    }
</script>

<p class="task_text">
    Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.
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