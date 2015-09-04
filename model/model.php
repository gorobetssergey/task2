<?php

Class SQL
{
    private function db_connect()
    {
        try
        {
            $pdo=new PDO('mysql:host=localhost;dbname=news','root','qscvhuki');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec('SET NAMES "utf8"');
        }
        catch(PDOException $e)
        {
            return $outpute='Невозможно подключиться к серверу баз данных: '.$e->getMessage();
            exit();
        }
        return $pdo;
    }
    function sql_query()
    {
        $ob=new SQL();
        $sql='SELECT * FROM news';
        try
        {
            $result=$ob->db_connect()->query($sql);
        }
        catch(PDOException $e)
        {
            $outpute='Помилка команди SELECT: '.$e->getMessage();
            echo $outpute;
            exit();
        }
        return $result;
    }
}