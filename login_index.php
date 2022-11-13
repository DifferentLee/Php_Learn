<?php
session_start();
if (! isset($_SESSION["is_login"])) {
    $_SESSION["is_login"] = FALSE;
    echo "亲爱的，请先<a href='login.html'><b>登录<b><a>"."<br>";
}else {
    if ($_SESSION["is_login"]) {
        $name = $_SESSION["name"];
        echo $name."! 您好，欢迎光临本会所！"."<br>";
        echo "<a href='logout.php'><b>退出<b><a>"."<br>";
    }else {
        echo "亲爱的，请先<a href='login.html'><b>登录<b><a>"."<br>";
    }
}



