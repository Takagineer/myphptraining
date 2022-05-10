<?php


require('../app/functions.php');
include('../app/_parts/_header.php');


?>

<form action="result.php" method="get">
  <!-- <input type="text" name="message"> -->
  <!-- <input type="text" name="username"> -->
  <!-- <textarea name="message"></textarea> -->
  <select name="colors[]" multiple >
    <option value="orange">orange</option>
    <option value="pink">pink</option>
    <option value="gold">gold</option>
  </select>
  <button>send</button>
</form>

<?php
include('../app/_parts/_footer.php');