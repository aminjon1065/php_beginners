<?php

class TasksClass
{

    public $pdo;

    /*
     конструкция встроенна в PHP
     * */
    function __construct()
    {
        $this->$pdo = new PDO("mysql:host=localhost; dbname=tasks", "root", "root");
    }

    /*
     Вытащить все записи из БД
     * */
    function all($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $fetchs = $statement->fetchAll(PDO::FETCH_ASSOC);
//
//        $sql = "SELECT * FROM $table";
//        $statement = $this->pdo->prepare($sql); //подготовить
//        $statement->execute(); //true || false
//        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $fetchs;
    }

    /*
     вытащить одну запись
     * */
    function getone($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    /*
     Добавить запись
     * */
    function store($table, $data)
    {
        // 1. Ключи массива
        $keys = array_keys($data);
        // 2. Сформировать строку title, content
        $stringOfKeys = implode(',', $keys);
        //3. Сформировать метки
        $placeholders = ":" . implode(', :', $keys);

        $sql = "INSERT INTO $table ($stringOfKeys) VALUES ($placeholders)";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data); //true || false
    }

    /*
     Редактировать запись
     * */
    function update($table, $data)
    {
        $fields = '';

        foreach ($data as $key => $value) {

            $fields .= $key . "=:" . $key . ",";
        }

        $fields = rtrim($fields, ',');


        $sql = "UPDATE $table SET $fields WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data); // true || false
    }


}
