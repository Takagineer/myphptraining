<?php

$today = date('Y-m-d H:i:s 1');
$names =  [
  'Taro',
  'Jiro',
  'Saburo'
];

require('../app/functions.php');
include('../app/_parts/_header.php');


?>

  <!-- <p>Hello, PHP!</p>
  <p>Today: <?php echo  $today ?></p>
  <p>Today: <?= $today ?></p> -->
  <!-- <p>名前: <?=$name ?></p> -->
  <!-- <p>名前: <?= h($name)?></p> -->
  <ul>

    <?php if(empty($names)): ?>
      <li>Nobody!</li>
      <?php  else: ?>

        <?php foreach ($names as $name) : ?>
          <li><?= h($name); ?></li>
        <?php endforeach ;?>
        
    <?php endif ;?>

  </ul>
<?php
 include('../app/_parts/_footer.php');