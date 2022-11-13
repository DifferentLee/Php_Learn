<?php
session_start();
if (isset($_POST["bnt"])) {
    $user_name = trim($_POST["user_name"]);
    $user_password = trim($_POST["user_password"]);

    if ($user_name == "" || $user_password == "") {
        $_SESSION["is_login"] = FALSE;
        echo "您输入的昵称和密码不能为空，请重新输入！<br>3秒后自动跳转<br>";
        header("refresh:3;url = login.html");
        die();
    }elseif ($user_name != "辉哥" || $user_password != "辉哥要发财"){
        $_SESSION["is_login"] = FALSE;
        echo "您输入的昵称或密码有误，请重新输入！<br>3秒后自动跳转<br>";
        header("refresh:3;url = login.html");
        die();
    }else {
        $_SESSION["is_login"] = TRUE;
        $_SESSION["name"] = $user_name;
        $_SESSION["password"] = $user_password;
        if (isset($_POST["ok_boy"])) {
            if ($_POST["ok_boy"] == "7") {
                setcookie("name", $user_name, time() + 7 * 24 * 3600);
                setcookie("password", $user_password, time() + 7 * 24 * 3600);
            }
        }else {
            setcookie("name", $user_name, time() + 3600);
            setcookie("password", $user_password, time() + 3600);
        }
        echo "恭喜您！登陆成功！<br>3秒后自动跳转<br>";
        header("refresh:3;url = login_index.php");
    }
}



