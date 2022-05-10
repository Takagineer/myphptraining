<?php


require('../app/functions.php');
include('../app/_parts/_header.php');

// $message = trim(filter_input(INPUT_GET,"message"));
// $username = filter_input(INPUT_GET,"username");
// $message = $message !== ''? $message : '...';

$color = filter_input(INPUT_GET,"color")

?>

<?= nl2br(h($color)); ?>
<!-- <?= h($username); ?></p> -->
<p><a href="index.php">Go back</a></p>

<?php
include('../app/_parts/_footer.php');