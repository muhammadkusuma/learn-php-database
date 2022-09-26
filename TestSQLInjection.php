<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$username= $connection->quote("admin';#");
$password= $connection->quote("adminmnjonon");
$sql = "select * from admin where username=$username and password=$password";

echo $sql.PHP_EOL;

$statement= $connection->query($sql);

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

$connection = null;