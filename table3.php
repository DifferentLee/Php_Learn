<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>

    <?php
        $good1 = '香蕉';
        $good2 = '苹果';
        $good3 = '橘子';
        $num1 = 2;
        $num2 = 1;
        $num3 = 3;
        $price1 = 7.99;
        $price2 = 6.89;
        $price3 = 3.99;
        $discount = 0.8;
        $sumprice = ($num1 * $price1 + $num2 * $price2 + $num3 * $price3) * $discount;
        $a = -45;
        $b = -16;
        $c = null;
//        echo ($a / $b);
        var_dump(isset($c));
        var_dump(is_null($c));
        $ggg = '1.55.4abc';
        echo ($ggg + 5);
    ?>

<table border="2" style="border-collapse: collapse" cellspacing="0">
    <tr>
        <td>商品名称</td>
        <td>购买数量(斤)</td>
        <td>商品价格(元/斤)</td>
    </tr>
    <tr>
        <td><?php echo $good1 ?></td>
        <td><?php echo $num1 ?></td>
        <td><?php echo $price1 ?></td>
    </tr>
    <tr>
        <td><?php echo $good2 ?></td>
        <td><?php echo $num2 ?></td>
        <td><?php echo $price2 ?></td>
    </tr>
    <tr>
        <td><?php echo $good3 ?></td>
        <td><?php echo $num3 ?></td>
        <td><?php echo $price3 ?></td>
    </tr>
    <tr>
        <td colspan="3">商品折扣：<?php echo $discount ?></td>
    </tr>
    <tr>
        <td colspan="3">打折后购买商品总价格：<?php echo $sumprice ?>元</td>
    </tr>
</table>
</body>
</html>

