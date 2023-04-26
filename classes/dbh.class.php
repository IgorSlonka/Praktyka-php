<?php
class Dbh
{
    
    protected function ConnectDB()
    {
        try {
            private $host = "localhost";
            private $user = "root";
            private $pwd = "";
            private $dbName = "baza";
            $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $pwd);
            return $dbh;            
        } catch (PDOException $e) {
            printf("Connect failed: %s, $e->getMessage()");
            die();
        }
    }
}
