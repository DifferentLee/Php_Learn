<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>
    <?php
    $arr2 = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
    $L2 = 0;
    $R2 = 8;
    function Quick_Sort(&$arr, $L, $R){     //必须是引用传递数组，否则递归无效
        if ($L >= $R){
            return $arr;
        }

        $left = $L;                         //这样移动left就好，不去动L，因为后面递归要用到L
        $right = $R;                        //这样移动right就好，不去动R，因为后面递归要用到R
        $pivot = $arr[$left];
        while ($left < $right){             // 外层循环不能少，因为left和right在一次循环中各自最多找到一个要变动的元素，要找到更多需要变动的元素，只能进入下一个循环
            while (($left < $right) && ($arr[$right] >= $pivot)){ //等于的话，就不去动它.($left < $right)一定不能省略，防止right减成left还继续减
                $right--;
            }

            if ($left < $right){            // 这个判断也不能少，因为出了上面那个循环，right可能已经变了很多了，但此时left还是0
                $arr[$left] = $arr[$right];
            }

            while (($left < $right) && ($arr[$left] <= $pivot)){ //right已经成功找到了一个比pivot小的了，该left找了
                $left++;
            }

            if ($left < $right){
                $arr[$right] = $arr[$left];
            }

            if ($left == $right){
                $arr[$left] = $pivot;
            }
        }

        Quick_Sort($arr, $L, $right - 1);   // 此时 $left = $right，新一轮的函数调用会有自己的$left和$right
        Quick_Sort($arr, $left + 1, $R);    // 此时 $left = $right，新一轮的函数调用会有自己的$left和$right
        return $arr;
    }

    print_r(Quick_Sort($arr2, $L2, $R2));
    ?>
</body>
</html>

