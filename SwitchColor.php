<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>改变颜色</title>
</head>
<body>
    <div id="my_color">
        轻轻的你走了，<br>
        正如你轻轻的来。<br>
        我轻轻的招手，<br>
        作别西天的云彩。
    </div>

    <form action="#" method="post">
        <select name="color" id="color">
            <option value="0">请选择颜色</option>
            <option value="1">红色</option>
            <option value="2">绿色</option>
            <option value="3">蓝色</option>
        </select>

        <input type="submit" name="btn" value="更改颜色">
    </form>

    <?php
    if (isset($_POST['btn'])){
        switch ($_POST['color']){
            case '1':
                $color = '#FF0000';
                break;
            case '2':
                $color = '#009900';
                break;
            case '3':
                $color = '#0000FF';
                break;
            default:
                $color = '#000000';
        }


        echo <<<str
        <script type="text/javascript">
                window.onload = function(){
                document.getElementById('my_color').style.color='$color';
            }
        </script>
str;
    }
    ?>
</body>
</html>

