<?php


require('../app/functions.php');
include('../app/_parts/_header.php');

$color = filter_input(INPUT_GET,'color') ?? 'None Selected';

?>

<p><?= h($color);?></p>
<p><a href="index.php">Go back</a></p>

<?php
include('../app/_parts/_footer.php');