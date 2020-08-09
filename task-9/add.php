<?php
$text=$_GET['text'];
$servername = "localhost";
$username = "root";
$password = "root";
$database = "tasks";
$mysqli = mysqli_connect($servername, $username, $password, $database);
$pdo = new PDO("mysql:host=localhost; dbname=tasks", "root", "root");
$res = mysqli_query($mysqli,"SELECT text FROM table WHERE text = $text");
$count = mysqli_fetch_row($res);
$statement = $pdo->prepare("INSERT INTO tasknine (text) VALUES (:text)");
$statement->bindParam(":text", $_POST['text']);
if( $count ==true ) {
    echo "Error add post";
} else {
    $result = $statement->execute();
}

var_dump($result); die();

header("Location: task_9.php");

?>

