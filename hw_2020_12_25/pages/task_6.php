<?php
function run_task()
{
    $arr = array('file.jpg','file.png','file.bmp');
    foreach ($arr as $file){
        if ( mb_substr($file, -4) == '.png' ){
            echo "$file - да<br>";
        } else {
            echo "$file - нет<br>";
        }
    }
}
?>
<script>
    function run_task() {
        const arr = ['file.jpg','file.png','file.bmp'];
        arr.forEach(function (value) {
            if (value.endsWith('.png')){
                document.write(value+' - да<br>');
            } else {
                document.write(value+' - нет<br>');
            }
        })
    }
</script>

<p class="task_text">
    Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
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