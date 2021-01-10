<?php
function array_fill_rand($arr){
    for ($i=0; $i<count($arr); $i++){
        $arr[$i] = mt_rand(0,100);
    }
    return $arr;
}
function run_task()
{
    $arr = array(0,0,0,0,0,0,0,0,0,0);
    echo '['.join(', ',$arr).']<br>';
    $rand_arr = array_fill_rand($arr);
    echo '['.join(', ',$rand_arr).']<br>';
}
?>
<script>
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    function array_fill_rand(arr) {
        for (let i = 0; i < arr.length; i++) {
            arr[i] = randomNumber(0,100);
        }
        return arr;
    }
    function run_task() {
        const arr = [0,0,0,0,0,0,0,0,0,0];
        document.write('['+arr.join(',') + ']<br>');
        const rand_arr = array_fill_rand(arr);
        document.write('['+rand_arr.join(',') + ']<br>');
    }
</script>

<p class="task_text">
    Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
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