<?php
require 'confirm/connection.php';
    $data=
        [
            "id"=>$_GET['id'],
            "firstname"=>$_POST['firstname'],
            "lastname"=>$_POST['lastname'],
            "username"=>$_POST['username']
        ];
$sql = 'UPDATE taskeight SET firstname=:firstname, lastname=:lastname, username=:username WHERE id=:id';
$statement=$pdo->prepare($sql);
$result = $statement->execute($data);
header("location: task_8.php");
