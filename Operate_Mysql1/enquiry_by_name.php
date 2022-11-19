<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>name enquiry</title>
</head>
<body>

<form action="#" method="post">
    按姓名查询：<input type="text" name="txtsname"><br>
    <input type="submit" name="btn" value="enquire">
</form>

<?php
if (isset($_POST['btn'])){
//    提交查询再连接服务器
    $sname = $_POST['txtsname'];
    $link = mysqli_connect("localhost", "root", "", "jxgl");
    if ($link) {
        echo "连接本地mysql服务器成功！<br>";
        $data = mysqli_select_db($link, "jxgl");
        if ($data){
            echo "选择jxgl成功<br>";
            $query = "SELECT * FROM student WHERE sname = '{$sname}'";
            $result = mysqli_query($link, $query);
            if ($result){
                echo "读取数据集成功<br>";
                while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo $rs['sname'].' '.$rs['sno'].' '.$rs['sclass'].' '.$rs['zno']."<hr>";
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
}
?>

</body>
</html>

