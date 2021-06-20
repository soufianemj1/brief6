<?php
require_once 'connection.php';

class ReservationModel{
    
     //reserver
    public function reservation($date,$horaire,$message,$user_id){

        $con= new Connection;
        $con =$con->connect();
        //foreing key!!
        $sql="INSERT INTO `rendez-vous`( `date`, `horaire`, `message`, `user_id`) VALUES ('$date','$horaire','$message','$user_id')";
        $query=$con->query($sql);
        if($query){
            return true;
        }else{
            return false;
        }


    }


      //afficher votre rdv
    public function read(){
        $con= new Connection;
        $con= $con->connect();

        $sql="SELECT * FROM `rendez-vous`";
        $query=$con->query($sql);

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }  

    //delete rdv
    public function delete($id){

        $con = new Connection;
        $con = $con->connect();

        $sql="DELETE FROM `rendez-vous` WHERE `id`=$id";
        $query=$con->query($sql);


    }

    //edit rdv
    public function edit($id){
        $con=new Connection;
        $con=$con->connect();
        $sql="SELECT * FROM `rendez-vous` WHERE `id`=$id";
        $query=$con->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    //select 
    public function select(){
        $sql="SELECT * FROM `rendez-vous`";
        $con=new Connection;
        $con=$con->connect();
        $query=$con->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //update rdv

    public function update($id,$date,$horaire,$message){

        $con = new Connection;
        $con = $con->connect();
        $sql="UPDATE `rendez-vous` SET `date`=$date,`horaire`=$horaire,`message`=$message, WHERE `id`=$id";
        $query=$con->query($sql);

    }




}