<?php
$pdo = new PDO("mysql:host=localhost; dbname=tasks", "root", "root");
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM tasknine WHERE id = $id");
$statement->execute();
$delete = $statement->fetchAll(PDO::FETCH_ASSOC);
header("Location: task_9.php");


?>
