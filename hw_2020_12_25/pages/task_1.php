<?php
function run_task()
{
    $arr = array("appliance", "cats", "driving", "mix", "excite", "loving", "prevent", "stranger", "cook", "river", "baseball", "lamp");
    foreach ($arr as $str) {
        if (mb_strlen($str) > 5) {
            $str = mb_substr($str, 5) . '...';
        }
        echo "$str<br>";
    }
}
?>
<script>
    function run_task() {
        const arr = ["appliance", "cats", "driving", "mix", "excite", "loving", "prevent", "stranger", "cook", "river", "baseball", "lamp"];
        arr.forEach(function(value) {
            if (value.length>5){
                value = value.substr(5) + '...';
            }
            document.write(value + '<br>');
        });
    }
</script>

<p class="task_text">
    Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
    добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов -
    просто выведите эту строку на экран.
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