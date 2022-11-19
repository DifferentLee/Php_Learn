<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud Boy</title>
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

<form action="#" method="post">
<center><h2>crud学生信息</h2></center>
<table border="1" align="center" width="1000">
    <tr>
        <td align="right">学号</td>
        <td><input type="text" name="txtsno"></td>
    </tr>

    <tr>
        <td align="right">姓名</td>
        <td><input type="text" name="txtsname"></td>
    </tr>

    <tr>
        <td align="right">性别</td>
        <td>
            <input type="radio" name="rdossex" value="男">男
            <input type="radio" name="rdossex" value="女" checked="checked">女
        </td>
    </tr>

    <tr>
        <td align="right">出生日期</td>
        <td><input type="text" name="txtsbirth">(形如：YYYY-MM-DD)</td>
    </tr>

    <tr>
        <td align="right">专业</td>
        <td>

            <select name="majors_zno">

                <?php if (isset($result)): ?>
                    <?php while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                        <option value="<?=$rs['zno']?>"><?=$rs['zname']?></option>
                    <?php endwhile; ?>
                <?php endif; ?>

            </select>

        </td>
    </tr>

    <tr>
        <td align="right">所在班级</td>
        <td><input type="text" name="txtsclass"></td>
    </tr>

    <tr>
        <td align="right"></td>
        <td><input type="submit" name="btn_insert" value="insert"></td>
    </tr>

</table>
</form>

<?php
if (isset($_POST['btn_insert'])){
    $sno = $_POST['txtsno'];
    $sname = $_POST['txtsname'];
    $ssex = $_POST['rdossex'];
    $sbirth = $_POST['txtsbirth'];
    $zno = $_POST['majors_zno'];
    $sclass = $_POST['txtsclass'];

    $query2 = "INSERT INTO student SET sno='$sno', sname='$sname', ssex='$ssex', sbirth='$sbirth', zno='$zno', sclass='$sclass'";
    $result2 = mysqli_query($link, $query2);
    if ($result2){
        echo "读取数据集成功<br>";
        echo "insert successfully!<br>";
        ;
    }else{
        echo "读取数据集失败<br>";
    }

    }

?>

</body>
</html>

