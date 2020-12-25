<?php
function run_task()
{
    $str_start_date = "10-02-2015";
    $str_end_date = "25-12-2020";
    $diff_time = strtotime($str_end_date) - strtotime($str_start_date);
    $diff_days = floor($diff_time/86400);
    echo "От $str_start_date до $str_end_date - $diff_days дня(ей)";
}
?>
<script>
    function run_task() {
        const str_start_date = "10-02-2015";
        const str_end_date = "25-12-2020";
        const iso_str_start_date = str_start_date.split('-').reverse().join('-');
        const iso_str_end_date = str_end_date.split('-').reverse().join('-');
        const diff_time = Date.parse(iso_str_end_date) - Date.parse(iso_str_start_date);
        const diff_days = Math.floor(diff_time/86400/1000);
        document.write("От "+str_start_date+" до "+str_end_date+" - "+diff_days+" дня(ей)");
    }
</script>

<p class="task_text">
    В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.
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