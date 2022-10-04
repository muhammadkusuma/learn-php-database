<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("insert into comments (email, comment) values ('email@email.com','yo')");
$connection->exec("insert into comments (email, comment) values ('email@email.com','yo a')");
$connection->exec("insert into comments (email, comment) values ('email@email.com','yo b')");
$connection->exec("insert into comments (email, comment) values ('email@email.com','yo c')");
$connection->exec("insert into comments (email, comment) values ('email@email.com','yo d')");

$connection->commit();

$connection=null;