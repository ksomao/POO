<?php

class User
{

    private $db;

    public function __construct()
    {

        try {
            $this->db = new PDO("mysql:host=localhost;dbname=database", "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $exception) {
            die($exception);
        }
    }

    public function register($pseudo, $password)
    {
        $req = $this->db->prepare("INSERT INTO utilisateurs (pseudo,password) VALUES (?,?,?)");
        $req->execute([$pseudo, $password]);
    }

    public function login($pseudo, $password)
    {
        $req = $this->db->query("SELECT pseudo FROM utilisateurs WHERE pseudo = {$pseudo}");


    }


}


$user = new User();
$user->register("john", "456789");