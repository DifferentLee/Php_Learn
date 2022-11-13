<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>今日距离您的生日还有几天？</title>
</head>
<body>
    <form action="#" method="post">
        请输入您的生日年份：<input type="text" name="birth_year" id="birth_year"><br>
        请输入您的生日月份：<input type="text" name="birth_month" id="birth_month"><br>
        请输入您的生日日期：<input type="text" name="birth_day" id="birth_day"><br>
        <input type="submit" name="btn" value="提交您的生日">
    </form>

    <?php
    if (isset($_POST['btn'])){
        $now_year = date("Y");
        $next_year = date("Y");
        $now_month = date("m");
        $now_day = date("d");

        $birth_month = $_POST["birth_month"];
        $birth_day = $_POST["birth_day"];

        if ($now_month > $birth_month){
            $next_year = $next_year + 1;
        }elseif ($birth_month == $now_month){
            if ($now_day > $birth_day){
                $next_year = $next_year + 1;
            }
        }

        $date1=date_create("$next_year-$birth_month-$birth_day");
        $date2=date_create("$now_year-$now_month-$now_day");
        $diff=date_diff($date2,$date1);
        echo $diff->format("%R%a days");
    }
    ?>
</body>
</html>

