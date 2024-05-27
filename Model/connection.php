<?php

class Connection
{
    private $host = 'localhost';
    private $dbname = 'injection';
    private $user = 'root';
    private $password = '';

    public function connect()
    {
        try {
            $db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
            return $db;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
