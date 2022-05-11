<?php 

require('../app/functions.php');

unset($_SESSION['color']);

header('Location: http://localhost:8080/index.php');
//前に出力ダメ。Lは大文字。httpの前は半角を開ける、必ず始まりはhttp〜