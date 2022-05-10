<?php


require('../app/functions.php');
include('../app/_parts/_header.php');


?>

<form action="result.php" method="get">
  <!-- <input type="text" name="message"> -->
  <!-- <input type="text" name="username"> -->
  <!-- <textarea name="message"></textarea> -->
  <select name="color" >
    <option value="orange">オレンジ</option>
    <option value="pink">ピンク</option>
    <option value="gold">ゴールド</option>
  </select>
  <button>send</button>
</form>

<?php
include('../app/_parts/_footer.php');