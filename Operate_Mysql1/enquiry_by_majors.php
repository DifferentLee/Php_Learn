<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>majors enquiry</title>
</head>
<body>

<?php
    $link = mysqli_connect("localhost", "root", "", "jxgl");
    if ($link) {
        echo "连接本地mysql服务器成功！<br>";
        $data = mysqli_select_db($link, "jxgl");
        if ($data){
            echo "选择jxgl成功<br>";
            $query = "SELECT * FROM specialty";
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

<?php if (isset($result)): ?>
    <form action="#" method="post">
        请选择专业：
        <select name="majors_zno">

            <?php while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                <option value="<?=$rs['zno']?>"><?=$rs['zname']?></option>
            <?php endwhile; ?>

        </select>
        <br>
        <input type="submit" name="btn" value="enquire">
<!--        先连接连接服务器查询专业再提交-->
    </form>
<?php endif; ?>

<?php
    if (isset($_POST['btn'])){
        $zno = $_POST['majors_zno'];
        echo $zno."<hr>";
//前面已经连接过一次数据库了，这里就不再重复连接了，只需要执行sql语句即可
        $query2 = "SELECT * FROM student WHERE zno = '{$zno}'";
        $result2 = mysqli_query($link, $query2);
        if ($result2){
            echo "读取数据集成功<br>";
            ;
        }else{
            echo "读取数据集失败<br>";
        }

    }

?>

    <?php if (isset($result2)): ?>
<!--必须点击查询按钮之后，才会有result2，有result2才会有下面的学生信息表，没有if (isset($result2))，不提交查询按钮也会显示下面的表头-->
        <center><h2>学生信息</h2></center>
        <table border="1" align="center" width="1000">
            <tr>
                <th>学号</th>
                <th>姓名</th>
                <th>性别</th>
                <th>班级</th>
                <th>查看出生日期</th>
            </tr>


        <?php while ($rs2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)): ?>
            <?php if ($rs2['ssex'] == '男'): ?>
                <tr bgcolor="#dc143c">
            <?php endif; ?>
            <td><?=$rs2['sno']?></td>
            <td><?=$rs2['sname']?></td>
            <td><?=$rs2['ssex']?></td>
            <td><?=$rs2['sclass']?></td>
            <td><a href="detail.php?sbirth=<?=$rs2['sbirth']?>" target="_blank">查看出生日期</a></td>
            </tr>
        <?php endwhile; ?>
        <?php echo "共有数据：".mysqli_num_rows($result2)."条"; ?>
    <?php endif; ?>


</body>
</html>


