<p class="task_text">
    Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
</p>
<section class="div__task">
    <div>
        <h4>PHP</h4>
        <?
        $num = 1000;
        $count = 0;
        while ($num >= 50) {
            $num /= 2;
            $count++;
        }
        echo "<p>While: $count итераций</p>";
        for ($num = 1000, $count = 0; $num >= 50; $num /= 2){
            $count++;
        }
        echo "<p>For: $count итераций</p>";
        ?>
    </div>
    <div>
        <h4>JavaScript</h4>
        <script>
            let num = 1000;
            let count=0;
            while (num >= 50) {
                num /= 2;
                count++;
            }
            document.write('<p>While: '+count+' итераций</p>');

            count=0;
            for (let num = 1000; num >= 50; num /= 2) {
                count++;
            }
            document.write('<p>For: '+count+' итераций</p>');
        </script>
    </div>
</section>