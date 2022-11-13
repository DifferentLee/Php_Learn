<?php

$books = ['php.jpg', 'mysql.jpg', 'python.jpg', 'database.jpg'];

?>

<div>

    <?php foreach($books as $book):?>

        <div>

            <img src="./img_index/<?php  echo $book;?>" width="75" height="100">

        </div>

    <?php endforeach;?>



</div>
