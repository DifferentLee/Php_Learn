<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>
    <table border="1" align="center" width="1000">
        <?php for ($i = 1; $i <= 9; ++$i): ?>
            <tr>
            <?php for ($j = 1; $j <= $i; $j++): $product = $i * $j; ?>

                    <td><?="{$i} × {$j} = {$product}" ?></td>

            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>



