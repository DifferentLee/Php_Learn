<?php
$link = mysqli_connect("localhost", "root", "", "jxgl");
if ($link) {
    echo "连接本地mysql服务器成功！<br>";
    $data = mysqli_select_db($link, "jxgl");
    if ($data){
        echo "选择jxgl成功<br>";
        $query = "SELECT * FROM student";
        $result = mysqli_query($link, $query);
        if ($result){
            echo "读取数据集成功<br>";
        }else{
            echo "读取数据集失败<br>";
        }
    }else{
        echo "选择jxgl失败<br>";
    }
}else {
    echo "连接本地mysql服务器失败！";
}
