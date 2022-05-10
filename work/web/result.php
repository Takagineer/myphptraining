<?php


require('../app/functions.php');
include('../app/_parts/_header.php');

// $message = trim(filter_input(INPUT_GET,"message"));
// $username = filter_input(INPUT_GET,"username");
// $message = $message !== ''? $message : '...';

$colors = filter_input(INPUT_GET,"colors",FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
$colors = empty($colors) ? 'None selected' : implode(',' , $colors);

?>

<?= nl2br(h($colors)); ?>
<!-- <?= h($username); ?></p> -->
<p><a href="index.php">Go back</a></p>

<?php
include('../app/_parts/_footer.php');