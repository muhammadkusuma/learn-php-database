<?php

require_once __DIR__ . "/getConnection.php";

$connection=getConnection();

$connection->exec("insert into comments (email, comment) values ('wira@wira.com','hai')");
$id=$connection->lastInsertId();

echo $id.PHP_EOL;

$connection=null;