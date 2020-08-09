<?php
require 'confirm/connection.php';
$statement = $pdo->prepare("INSERT INTO taskeight (firstname, lastname, username) VALUES (:firstname, :lastname, :username)");
$statement->bindParam(":firstname", $_POST['firstname']);
$statement->bindParam(":lastname", $_POST['lastname']);
$statement->bindParam(":username", $_POST['username']);
$result = $statement->execute();
header("Location: task_8.php");

?>

