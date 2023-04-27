<?php
class Dbh
{
    protected function ConnectDB()
    {
        try {
            $host = "127.0.0.1";
            $user = "root";
            $pwd = "";
            $dbName = "baza";
            $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $pwd);
            return $dbh;            
        } catch (PDOException $e) {
            printf("Connect failed: %s", $e->getMessage());
            die();
        }
    }
}
