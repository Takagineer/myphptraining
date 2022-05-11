<?php


require('../app/functions.php');
include('../app/_parts/_header.php');

$colorFromGet = filter_input(INPUT_GET,'color') ?? 'transparent';
$SESSION['color'] =$colorFromGet;
//setcookieの前でechoやhtmlを記述してはいけない


?>

<p><?= h($colorFromGet);?></p>
<p><a href="index.php">Go back</a></p>

<?php
include('../app/_parts/_footer.php');