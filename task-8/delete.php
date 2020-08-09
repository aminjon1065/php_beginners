<?php
require 'confirm/connection.php';
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM taskeight WHERE id = $id");
$statement->execute();
$delete = $statement->fetchAll(PDO::FETCH_ASSOC);
header("Location: task_8.php");


?>
