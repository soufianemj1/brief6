<?php

require_once require_once __DIR__."/../models/login.php";
 
class Login {

    public function index (){
        
        $selectuse= new Login;
        $result= $selectuse->login($ref);
        


    }



}

