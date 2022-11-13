<?php
session_start();
$name = $_SESSION["name"];
echo $name."，相逢何必曾相识，再见！<br>";
setcookie("name", "", 0);
setcookie("password", "", 0);
$_SESSION = array();
session_destroy();
echo "<a href='login_index.php'>重新来一次<a>";

