<p class="task_text">
    Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.
</p>
<div class="task_data">
    <label for="select_i" title="Выберите значение">Выберите значение</label>
    <select name="select_i" id="select_i" onchange="document.location='?task_id=3&i='+this.options[this.selectedIndex].value">
        <?
        $i = (int)$_GET["i"];
        if ($i < 0 || $i > 10){
            $i=0;
        }
        foreach (range(0, 10) as $s) {
            if ($i==$s){
                echo "<option selected value='$s'>$s</option>";
            } else {
                echo "<option value='$s'>$s</option>";
            }
        }
        ?>
    </select>
</div>
<section class="div__task">
    <div>
        <h4>PHP</h4>
        <?
        $out_array = array();
        $out_array = range(0,10-$i);
        echo "<p>".implode(", ", $out_array)."</p>";
        ?>
    </div>
    <div>
        <h4>JavaScript</h4>
        <script>
            let i = parseInt(document.getElementById("select_i").value);
            let out_array = [];
            for (let z = 0; z+i<=10; z++) {
                out_array.push(z);
            }
            document.write('<p>'+out_array.join(', ')+'</p>');
        </script>
    </div>
</section>