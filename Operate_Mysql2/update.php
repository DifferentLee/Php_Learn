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
        $query = "SELECT * FROM specialty";
        $result = mysqli_query($link, $query);

        $query2 = "SELECT * FROM student WHERE sno = '{$sno}'";
        $result2 = mysqli_query($link, $query2);
        $rs2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

        if ($result and $result2){
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
?>

<?php if (isset($result) and isset($result2) and isset($rs2)): ?>
<form action="#" method="post">
    <center><h2>crud学生信息</h2></center>
    <table border="1" align="center" width="1000">
        <tr>
            <td align="right">学号</td>
            <td><input type="text" name="txtsno" value="<?=$rs2['sno']?>"></td>
        </tr>

        <tr>
            <td align="right">姓名</td>
            <td><input type="text" name="txtsname" value="<?=$rs2['sname']?>"></td>
        </tr>

        <tr>
            <td align="right">性别</td>
            <td>
                <input type="radio" name="rdossex" value="男" <?php if ($rs2['ssex']=='男'){echo 'checked="checked"';}?>>男
                <input type="radio" name="rdossex" value="女" <?php if ($rs2['ssex']=='女'){echo 'checked="checked"';}?>>女
            </td>
        </tr>

        <tr>
            <td align="right">出生日期</td>
            <td><input type="text" name="txtsbirth" value="<?=$rs2['sbirth']?>">(形如：YYYY-MM-DD)</td>
        </tr>

        <tr>
            <td align="right">专业</td>
            <td>

                <select name="majors_zno">

                        <?php while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                            <?php if ($rs['zno']==$rs2['zno']): ?>
                                <option value="<?=$rs['zno']?>" selected="selected"><?=$rs['zname']?></option>
                            <?php else: ?>
                                <option value="<?=$rs['zno']?>"><?=$rs['zname']?></option>
                            <?php endif; ?>
                        <?php endwhile; ?>

                </select>

            </td>
        </tr>

        <tr>
            <td align="right">所在班级</td>
            <td><input type="text" name="txtsclass" value="<?=$rs2['sclass']?>"></td>
        </tr>

        <tr>
            <td align="right"></td>
            <td><input type="submit" name="btn_update" value="update"></td>
        </tr>

    </table>
</form>
<?php endif; ?>

<?php
if (isset($_POST['btn_update'])){
    $sno = $_POST['txtsno'];
    $sname = $_POST['txtsname'];
    $ssex = $_POST['rdossex'];
    $sbirth = $_POST['txtsbirth'];
    $zno = $_POST['majors_zno'];
    $sclass = $_POST['txtsclass'];

    $query3 = "UPDATE student SET sno='$sno', sname='$sname', ssex='$ssex', sbirth='$sbirth', zno='$zno', sclass='$sclass' WHERE sno='$sno'";
    $result3 = mysqli_query($link, $query3);
    if ($result3){
        echo "读取数据集成功<br>";
        echo "update successfully!<br>";
        ;
    }else{
        echo "读取数据集失败<br>";
    }

}

?>

</body>
</html>


