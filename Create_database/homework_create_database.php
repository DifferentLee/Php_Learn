<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redden Boy</title>
</head>
<body>

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
            ;
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

<center><h2>学生信息</h2></center>
<table border="1" align="center" width="1000">
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>班级</th>
        <th>更新</th>
        <th>删除</th>
    </tr>

    <script language="JavaScript">
        function Checkme() {
            if (confirm("是否确定删除数据？") === true){
                alert("成功删除数据");
                return true;
            } else {
                alert("没有删除数据");
                return false;
            }
        }
    </script>

    <?php if (isset($result)): ?>
        <?php while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
            <?php if ($rs['ssex'] == '男'): ?>
                <tr bgcolor="#dc143c">
            <?php endif; ?>
            <td><?=$rs['sno']?></td>
            <td><?=$rs['sname']?></td>
            <td><?=$rs['ssex']?></td>
            <td><?=$rs['sclass']?></td>
            <td><a href="update.php?sno=<?=$rs['sno']?>" target="_blank">update</a></td>
            <td><a href="deletion.php?sno=<?=$rs['sno']?>" target="_blank" onclick="return Checkme()">delete</a></td>
            </tr>
        <?php endwhile; ?>
    <?php endif; ?>


</table>

</body>
</html>

