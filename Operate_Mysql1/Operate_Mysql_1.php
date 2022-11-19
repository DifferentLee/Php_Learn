<?php
$link = mysqli_connect("localhost", "root", "", "jxgl");
if ($link) {
    echo "连接本地mysql服务器成功！<br>";
    $data = mysqli_select_db($link, "jxgl");
    mysqli_set_charset($link, 'utf8');
    if ($data){
        echo "选择jxgl成功<br>";
        $query = "SELECT * FROM student";
        $result = mysqli_query($link, $query);
        if ($result){
            echo "读取数据集成功<br>";
            while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo $rs['sno']."&nbsp;&nbsp;&nbsp;&nbsp;".$rs['sname']."&nbsp;&nbsp;&nbsp;&nbsp;".$rs['sclass']."<hr>";
            }
            echo "共有数据：".mysqli_num_rows($result)."条";
        }else{
            echo "读取数据集失败<br>";
        }
    }else{
        echo "选择jxgl失败<br>";
    }
}else {
    echo "连接本地mysql服务器失败！";
}
