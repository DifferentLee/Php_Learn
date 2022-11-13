<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生成绩</title>
</head>
<body>
    <h2>请输入您的姓名和分数</h2>
    <form action="#" method="post">
        请输入姓名：<input type="text" name="name" id="name">
        <hr>
        请输入成绩：<input type="text" name="score" id="score">
        <hr>
        <input type="submit" name="btn" id="btn">
    </form>

    <?php
    if (isset($_POST['btn'])){
        $Name = $_POST['name'];
        $Score = $_POST['score'];
        if (is_numeric($Score)){
            echo "您好{$Name}，很高兴你能在CAU学习！<hr>";
            switch ($Score){
                case $Score >= 90:
                    echo 'A<br/>';
                    break;
                case $Score >= 80:
                    echo 'B<br/>';
                    break;
                case $Score >= 70:
                    echo 'C<br/>';
                    break;
                case $Score >= 60:
                    echo 'D<br/>';
                    break;
                default:
                    echo 'E<br/>';
            }
        }
    }
    ?>
</body>
</html>
