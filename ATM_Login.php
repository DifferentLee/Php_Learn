<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATM</title>
</head>
<body>
    <form action="#" method="post">
        请输入您的账号:<input type="text" name="username" id="username"><br>
        请输入您的密码:<input type="password" name="pwd" id="pwd"><br>
        <input type="submit" name="btn" value="登录"><br>
        <input type="hidden" name="cnt" value="1" id="failed">
    </form>

    <?php
    if (isset($_POST['btn'])){
        $name = $_POST['username'];
        $password = $_POST['pwd'];
        $count = $_POST['cnt'];
        if ($count > 3){
            echo '您已经登录3次以上且均失败，将要吞卡<br/>';
            die("寄了");
        }elseif (($name != 'admin')){
            echo '用户名错误 登录失败<br/>';
            $count++;
        }elseif ($password != 'abc'){
            echo '用户名正确 密码错误 登录失败<br/>';
            $count++;
        }else {
            echo '用户名正确 密码正确，登录成功<br/>';
        }

        echo <<<str
        <script type="text/javascript">
                window.onload = function(){
                document.getElementById('failed').style.color='$count';
            }
        </script>
str;
    }
    ?>

</body>
</html>




