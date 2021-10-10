<?php

	class Cars{

		var $wheel_count = 4;

		public function car_details(){
			return "Car Wheel Has " .$this->wheel_count;
		}

	}

	$bmw = new Cars();
	echo $bmw->car_details();


?>