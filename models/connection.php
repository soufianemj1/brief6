<?php

class Connection{

    

    public $servername='localhost';
    public $dbname='reservation_archi';
    public $user='root';
    public $pass='';

    public function connect(){

        try {
           $db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->user, $this->pass);
           return $db;

        }catch (PDOException $e) {
            print "Erreur :" . $e->getMessage() . "<br>";
        }
    }



} 
