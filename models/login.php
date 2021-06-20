<?php

class Login {
    //creation de compte
    public function signup(){
        $con= new Connection;
        $con = $con->connect();

      //reference
        $sql=
        "INSERT INTO `user`( `reference`,`nom`, `prenom`, `age`, `email`, `telephone`) VALUES ('$ref',[name],[lastname],[age],[email],[telephone])";
        $query= $con->query($sql);
    }

    //login

    public function login($ref){

        $con= new Connection;
        $con= $con->connect();
        $sql="SELECT * FROM `user` WHERE `reference`='$ref' ";
        $query->$con->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }






}