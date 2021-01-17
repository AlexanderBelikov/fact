<?php
    session_start();

    if (isset($_POST['answer'])) {
        $_SESSION['test_1'] = ($_POST['answer'] == 4) ? 1 : 0;
        header("Location: ./test_2.php");
        exit();
    } else {
        unset($_SESSION['test_1']);
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
<body>
<form action="" method="post">
    <label for="answer">2 + 2 = </label>
    <input type="text" name="answer" required>
    <input type="submit">
</form>
<a href="test_2.php">test_2</a>
</body>
</html>
