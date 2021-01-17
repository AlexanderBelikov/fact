<?php
    session_start();
    $_SESSION['result'] = 0;
    for ($i=1; $i<=3; $i++) {
        if ($_SESSION["test_".$i]) {
            $_SESSION['result']++;
        }
    }
    echo "Результат ".$_SESSION['result']." балл(а)";
?>
<br>
<a href="test_1.php">return</a>