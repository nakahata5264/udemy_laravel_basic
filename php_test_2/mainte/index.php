<?php

require 'db_connection.php';

$sql = 'select * from contacts where id = 4';
$stmt = $pdo->query($sql);

$result = $stmt->fetchall();
var_dump($result);

?>


