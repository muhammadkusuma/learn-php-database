<?php

require_once __DIR__ . "/getConnection.php";

$connection=getConnection();

$sql="select * from customers";
$statement=$connection->query($sql);

$customers=$statement->fetchAll();
var_dump($customers);

$connection=null;