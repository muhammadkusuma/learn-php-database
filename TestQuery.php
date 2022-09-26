<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$sql = "select id,name, email from customers";
$result = $connection->query($sql);
foreach ($result as $row){
    $id= $row["id"];
    $name=$row["name"];
    $email=$row["email"];

    echo "id : $id".PHP_EOL;
    echo "name : $name".PHP_EOL;
    echo "email : $email".PHP_EOL;

}

$connection = null;