<?php


$file_css = file("css/style.css");
$bc_array = array();
$prefix_str = 'color:';
foreach ($file_css as $line_css) {
    $prefix_pos = strpos($line_css, $prefix_str);
    if ($prefix_pos !== false) {
        $color_start_pos = $prefix_pos + strlen($prefix_str);
        $color_end_pos = strpos($line_css, ';', $color_start_pos);
        $bc_array[] = substr($line_css, $color_start_pos, ($color_end_pos - $color_start_pos));
    }
//    if (preg_match('/#\w{6}/', $line_css, $matches)){
//        foreach ($matches as $bc){
//            $bc_array[] = $bc;
//        }
//    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
if (isset($_GET['bc'])) {
    echo '<body style="background-color:' . $_GET['bc'] . ';">';
} else {
    echo '<body>';
}
?>

<form action="" method="get">
    <select name="bc">
    <?php
    foreach ($bc_array as $bc) {
        if (isset($_GET['bc']) && $_GET['bc'] == $bc) {
            echo '<option value="' . $bc . '" style="background-color:' . $bc . ';" selected>' . $bc . '</option>';
        } else {
            echo '<option value="' . $bc . '" style="background-color:' . $bc . ';" >' . $bc . '</option>';
        }

    }
    ?>
    </select>
    <input type="submit">
</form>

</body>
</html>

