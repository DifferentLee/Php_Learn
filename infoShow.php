<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>

<form action="#" method="post">
    <center>注册账号</center>
    <table align="center" border="1">
        <tr>
            <td>用户名:</td>
            <td><input type="text" name="content[username]"></td>
        </tr>

        <tr>
            <td>email:</td>
            <td><input type="text" name="content[email]"></td>
        </tr>

        <tr>
            <td>密码:</td>
            <td><input type="password" name="content[pwd]"></td>
        </tr>

        <tr>
            <td>确认密码:</td>
            <td><input type="password" name="content[confirm_pwd]"></td>
        </tr>

        <tr>
            <td>性别:</td>
            <td>
                <input type="radio" name="content[sex]" value="男">男
                <input type="radio" name="content[sex]"  value="女" checked>女
            </td>
        </tr>

        <tr>
            <td>手机号码:</td>
            <td><input type="text" name="content[phone]"></td>
        </tr>

        <tr>
            <td>喜欢的编程技术:</td>
            <td>
                <select name="content[loveLanguage]">
                    <option selected>PHP</option>
                    <option >Python</option>
                    <option>Java</option>
                    <option>C</option>
                    <option>C++</option>
                    <option>Go</option>
                    <option>Rust</option>
                    <option>C#</option>
                </select>
            </td>
        </tr>

        <tr>
            <td COLSPAN="2">
                <input type="checkbox" checked name="content[check]">我已经看过并接受<a href="https://www.bilibili.com/" target="_blank"> <b>用户协议</b></a>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="立即注册" name="bnt"></td>
        </tr>
    </table>

</form>

    <?php
    if (isset($_POST["bnt"])) {
        if (isset($_POST["content"]["check"])) {
            if ($_POST["content"]["username"] == "" || $_POST["content"]["email"] == "" || $_POST["content"]["pwd"] == "" ||
                $_POST["content"]["confirm_pwd"] == "" || $_POST["content"]["sex"] == "" || $_POST["content"]["phone"] == "" ||
                $_POST["content"]["loveLanguage"] == "") {
                echo "不能有不填的！" or exit("回去填");
            }else {
                echo "你好";
                echo "用户名:".$_POST["content"]["username"]."<br>";
                echo "邮箱:".$_POST["content"]["email"]."<br>";
                echo "密码:".$_POST["content"]["pwd"]."<br>";
                echo "确认密码:".$_POST["content"]["confirm_pwd"]."<br>";
                echo "性别:".$_POST["content"]["sex"]."<br>";
                echo "手机号:".$_POST["content"]["phone"]."<br>";
                echo "你喜欢的编程预言:".$_POST["content"]["loveLanguage"]."<br>";
            }
        }
    }
    ?>

</body>
</html>





