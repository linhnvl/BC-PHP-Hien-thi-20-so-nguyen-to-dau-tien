<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hien thi so nguyen to</title>
</head>
<body>
<?php
    $numbers = 20;
    $count = 0;
    for ($n = 2; $count < $numbers; $n++) {
        $flag = true;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i === 0) {
                $flag = false;
                break;
            }
        }
        if ($flag) {
            echo $n . '<br/>';
            $count++;
        }
    }
?>
</body>
</html>