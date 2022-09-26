<?php

require_once 'getConnection.php';

$connection=getConnection();

$sql= <<<SQL
    insert into customers(id,name, email)
    values ('ade','Ade','mail@ade.com'); 
SQL;

$connection->exec($sql);

$connection=null;