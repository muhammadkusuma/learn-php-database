<?php

require_once __DIR__ .  "/getConnection.php";

$connection = getConnection();

$username= "budi";
$password= "budi";

$sql = "insert into admin(username, password) values (?,?)";
$statement= $connection->prepare($sql);
$statement->bindParam(1,$username);
$statement->bindParam(2,$password);
$statement->execute();

$connection=null;
