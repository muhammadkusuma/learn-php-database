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

$succes=false;
$find_user=null;
foreach ($statement as $row){
//    sukses
    $succes=true;
    $find_user=$row["username"];
}

if ($succes){
    echo "Sukses Login : ". $find_user.PHP_EOL;
}else {
    echo "Gagal login".PHP_EOL;
}

$connection=null;
