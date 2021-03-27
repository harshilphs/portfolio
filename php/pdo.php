<?php
$pdo = new PDO('mysql:host=local;dbname=xyz','username','pass');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
