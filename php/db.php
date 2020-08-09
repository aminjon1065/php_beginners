<?php
class connection
{

    public $pdo;

    function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost; dbname=tasks", "root", "root");
    }
    function first($table) /// posts , articles, tasks
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->pdo->prepare($sql); //подготовить
        $statement->execute(); //true || false
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

};

//function taskone ()
//{
//        $sqlone = "SELECT * FROM $table";
//        $statement = $this->prepare($sqlone);
//        $statement = execute();
//        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
//    var_dump($result);
//
//    return $result;
//
//}
