<?php
include('../config/config.php');

$pdo = new PDO(DRIVER.":".HOST.";dbname=".DB, USER, PASS);

?>