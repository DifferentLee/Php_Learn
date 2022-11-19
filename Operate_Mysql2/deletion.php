<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud Boy</title>
</head>
<body>

<?php
$sno = $_GET['sno'];
$link = mysqli_connect("localhost", "root", "", "jxgl");
if ($link) {
    echo "连接本地mysql服务器成功！<br>";
    $data = mysqli_select_db($link, "jxgl");
    mysqli_set_charset($link, 'utf8');
    if ($data){
        echo "选择jxgl成功<br>";
        $query = "DELETE FROM student WHERE sno = '{$sno}'";
        $result = mysqli_query($link, $query);

        $query2 = "DELETE FROM sc WHERE sno = '{$sno}'";
        $result2 = mysqli_query($link, $query2);

        if ($result and $result2){
            echo "读取数据集成功<br>";
            echo "delete successfully!<br>";
        }else{
            echo "读取数据集失败<br>";
        }
    }else{
        echo "选择jxgl失败<br>";
    }
}else {
    echo "连接本地mysql服务器失败！";
}

?>

</body>
</html>


