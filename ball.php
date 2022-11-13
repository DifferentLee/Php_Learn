<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>给排2班</title>
</head>
<body>
    <?php
    $_red = range(1, 33);
    $_red_keys = array_rand($_red, 6);
    shuffle($_red_keys);
    foreach ($_red_keys as $key) {
        if ($_red[$key] < 10) {
            echo "0".$_red[$key]."<br>";
        }else {
            echo $_red[$key]."<br>";
        }
    }

    $_blue = range(1, 16);
    $_blue_key = array_rand($_blue, 1);
    echo $_blue[$_blue_key];
    ?>
</body>
</html>
