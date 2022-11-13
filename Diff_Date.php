<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>

    <?php
    $date1 = strtotime("2022-5-1 13:12:12");
    $date2 = strtotime("2022-5-2 12:45:11");
    $diff = abs($date1 - $date2);

    $days = floor($diff / 3600 / 24);
    $hours = floor(($diff - $days * 86400) / 3600);
    $mins = floor(($diff - $days * 86400 - $hours * 3600) / 60);
    $seconds = floor($diff - $days * 86400 - $hours * 3600 - $mins * 60);

    printf("相差: %f 日，%f 小时，%f 分钟，%f 秒", $days, $hours, $mins, $hours);
    echo '<br/>';
    echo "相差: {$days} 日，{$hours} 小时，{$mins} 分钟，{$seconds} 秒"
    ?>

</body>
</html>
