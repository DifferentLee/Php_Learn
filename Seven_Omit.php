<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>逢七过</title>
</head>
<body>

    <?php
    $cnt = 0;
    for ($n = 1; $n <= 99; $n++){
        if (($n % 10 == 7) || ($n % 7 == 0)){
            $cnt++;
        }
    }
    echo $cnt;
    ?>

</body>
</html>


