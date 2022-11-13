<?php

$arr = [['编程基础类', '程序设计I', 'Web程雪设计','Python语言程序设计'],

    ['数据处理类', '数据分析', '数据库原理']];

?>

<h2>开设课程信息</h2>

<ul>

    <?php foreach($arr as $values): ?>

        <?php foreach($values as $k => $v): ?>

            <?php echo $k > 0 ? "<li>$v</li>" : "<p>$v</p>"; ?>

        <?php endforeach; ?>

    <?php endforeach; ?>

</ul>
