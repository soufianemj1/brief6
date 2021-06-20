<?php

require_once __DIR__."/../models/ReservationModel.php";

class Reservation {


	public function index(){

		$read= new ReservationModel;
		$read= $read->read();


        // convertir format json

		echo json_encode($read);

	}

	public function reserver(){

		$data= json_decode(file_get_contents("php://input"));
		
		$reservation = new ReservationModel;
		$reservation = $reservation->reservation($data->date,$data->horire,$data->message,$data->user_id);



		



	}
}


