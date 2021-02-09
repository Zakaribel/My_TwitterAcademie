<?php

class Model
{
    private $user_db = 'root';
    private $pass = '';
    private $db_name = 'twitter';
    private $dbh = null;

    function __construct()
    {
        try {
            $this->dbh = new PDO("mysql:host=localhost:dbname=$this->db_name", $this->user_db, $this->pass);
        } catch (PDOException $e) {

            print 'ERREUR ! :' . $e->getMessage() . "<br/>";
            die();
        }
    }

    function register($nickname, $email, $password, $birthday)
    {
        $sql = $this->dbh->prepare("INSERT INTO users(nickname,email,password,birthday) VALUES (?,?,?,?)");
        return $sql->execute(array($nickname, $email, $password, $birthday));
    }

    function login($nickname)
    {
        $sql = $this->dbh->prepare("SELECT * FROM users WHERE nickname = ?");
        $sql->execute(array($nickname));
        return $sql->fetchAll();
    }
}