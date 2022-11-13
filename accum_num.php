<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>
    <?php
    $sum = 0;
    for ($n = 1; $n <= 100; $n++){
        if (($n % 3 )== 0){
            $sum += $n;
        }
    }
    echo $sum;
    ?>

</body>
</html>


