<?php

include($_SERVER['DOCUMENT_ROOT'].'/POSTS/config/config.php');

$pdo = new PDO(DRIVER.":host=".HOST.";dbname=".DB, USER, PASS);

?>