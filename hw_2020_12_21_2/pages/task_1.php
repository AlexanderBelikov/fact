<p class="task_text">
    Выведите столбец чисел от 5 до 13.
</p>
<section class="div__task">
    <div>
        <h4>PHP</h4>
        <?
        foreach (range(5,13) as $i) {
            echo "<p>$i</p>";
        }
        ?>
    </div>
    <div>
        <h4>JavaScript</h4>
        <script>
            for (let i = 5; i <= 13; i++) {
                document.write('<p>'+i+'</p>');
            }
        </script>
    </div>
</section>