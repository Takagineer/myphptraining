<?php


require('../app/functions.php');
include('../app/_parts/_header.php');


?>

<form action="result.php" method="get">
  <label><input type="radio" name="color" value="orange">orange</input></label>
  <label><input type="radio" name="color" value="pink">pink</input></label>
  <label><input type="radio" name="color" value="gold">gold</input></label>
  <button>send</button>
</form>

<?php
include('../app/_parts/_footer.php');