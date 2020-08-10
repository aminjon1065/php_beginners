<?php
session_start();
$text = $_POST['text'];
$pdo = new PDO("mysql:host=localhost; dbname=tasks", "root", "root");
$sql = "SELECT * FROM tasknine WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=> $text]);
$result = $statement->fetch(PDO::FETCH_ASSOC); 
// var_dump($result);
if (!empty($result)) {
    $message = 'Error, bye!';
    $_SESSION['message']= $message;
    header("Location: create.php");
    exit;

}



$result = $statement->fetch(PDO::FETCH_ASSOC); 
$sql = "INSERT INTO tasknine (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":text", $_POST['text']);
$statement->execute(['text'=>$text]);
$message = 'Hi, Awesome!';
$_SESSION['success']= $message;
header("Location: create.php");

?>