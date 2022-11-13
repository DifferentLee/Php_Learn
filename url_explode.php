<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大卖场</title>
</head>
<body>

    <?php
    function get_url($url) {
        $url_para = parse_url($url);
        $query = explode("&", $url_para["query"]);
        foreach ($query as $item) {
            echo "$item"."<br>";
        }
    }

    $url = "https://www.bilibili.com/video/BV18U4y1j7o1/?spm_id_from=333.788.recommend_more_video.2&vd_source=86560676da6f4c30de25eecbfa96c918";
    get_url($url);
    ?>

</body>
</html>
