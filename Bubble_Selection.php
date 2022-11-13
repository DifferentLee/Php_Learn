<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>
    <?php
    $arr = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
    $len = 10;
    function Bubble_Selection($arr, $len){
        if (is_array($arr)){
            for ($i = 0; $i < $len - 1; ++$i){
                for ($j = 0; $j < $len - $i - 1; ++$j){
                    if (isset($arr[$j]) && isset($arr[$j + 1])){
                        if ($arr[$j] > $arr[$j + 1]){
                            $t = $arr[$j];
                            $arr[$j] = $arr[$j + 1];
                            $arr[$j + 1] = $t;
                        }
                    }
                }
            }
            return $arr;
        }
    }
    print_r(Bubble_Selection($arr, $len));
    ?>
</body>
</html>

