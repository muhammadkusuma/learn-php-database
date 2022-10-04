<?php

require_once __DIR__ .  "/getConnection.php";

$connection = getConnection();

$username= "admin";
$password= "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password= :password";
$statement= $connection->prepare($sql);
$statement->bindParam("username",$username);
$statement->bindParam("password",$password);
$statement->execute();

if ($row = $statement->fetch()){
    echo "Sukses login : ". $row["username"].PHP_EOL;
}else{
    echo "Gagal Login".PHP_EOL;
}

var_dump($statement->fetch());

$connection=null;
