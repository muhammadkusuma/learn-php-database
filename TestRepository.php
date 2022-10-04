<?php

require_once __DIR__. "/getConnection.php";
require_once __DIR__. "/model/comment.php";
require_once __DIR__. "/repository/commentRepository.php";

use repository\commentRepositoryImpl;
use model\comment;

$connection=getConnection();
$repository=new commentRepositoryImpl($connection);

//$comment=new comment(email: "repostory@mail.com",comment: "hai");
//$newComment=$repository->insert($comment);
//
//var_dump($newComment->getId());

//$comment=$repository->findById(22);
//var_dump($comment);

$comments=$repository->findAll();
var_dump($comments);

$connection=null;
