<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>
    <?php
    function sortByKeyDesc($arr, $key) {    //降序

        array_multisort(array_column($arr, $key), SORT_DESC, $arr);
        return $arr;
    }

    function sortByKeyAsc($arr, $key) {     //升序

        array_multisort(array_column($arr, $key), SORT_ASC, $arr);
        return $arr;
    }
    ?>
</body>
</html>
