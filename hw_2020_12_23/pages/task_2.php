<?php
function run_task() {
    mb_internal_encoding("UTF-8");
    $arr = array();
    $arr[][] = 'агнец';
    $arr[][] = 'арава';
    $arr[][] = 'бокал';
    $arr[][] = 'возик';
    $arr[][] = 'гений';
    $arr[][] = 'дедка';
    $arr[][] = 'закон';
    $arr[][] = 'кофей';
    $arr[][] = 'мокой';
    $arr[][] = 'обуза';
    $arr[][] = 'стенд';
    $arr[][] = 'тролл';
    $arr[][] = 'унтер';
    $arr[][] = 'фазан';
    $arr[][] = 'хамса';
    $arr[][] = 'шофер';
    $arr[][] = 'эвеит';
    foreach ($arr as $arr_1){
        foreach ($arr_1 as $value){
            if (mb_substr($value,0,1)=='а'){
                echo "<p>$value</p>";
            }
        }
    }
}
?>
<script>
    function run_task() {
        const arr = [];
        arr.push(['агнец']);
        arr.push(['арава']);
        arr.push(['бокал']);
        arr.push(['возик']);
        arr.push(['гений']);
        arr.push(['дедка']);
        arr.push(['закон']);
        arr.push(['кофей']);
        arr.push(['мокой']);
        arr.push(['обуза']);
        arr.push(['стенд']);
        arr.push(['тролл']);
        arr.push(['унтер']);
        arr.push(['фазан']);
        arr.push(['хамса']);
        arr.push(['шофер']);
        arr.push(['эвеит']);

        arr.forEach(function(arr_1) {
            arr_1.forEach(function(value) {
                if (value[0]=='а'){
                    document.write('<p>' + value + '</p>');
                }
            });
        });
    }
</script>
<p class="task_text">
    Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.
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