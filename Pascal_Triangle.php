<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>
    <?php
    function Pascal_Triangle($n){
        $a = array();
        for ($i = 0; $i < $n; ++$i){
            $a[$i][0] = 1;
            $a[$i][$i] = 1;
        }

        for ($i = 1; $i < $n; ++$i){
            for ($j = 1; $j < $i; ++$j){
                $a[$i][$j] = $a[$i - 1][$j - 1] + $a[$i - 1][$j];
            }
        }

        for ($i = 0; $i < $n; ++$i){
            for ($j = 0; $j <= $i; ++$j){
                echo $a[$i][$j].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            echo '<br/>';
        }
    }
    Pascal_Triangle(10);
    ?>
</body>
</html>


