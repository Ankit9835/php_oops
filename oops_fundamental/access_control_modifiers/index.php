<?php

	class Cars{

		public $wheel = 4;
		private $air_bags = 2;
		protected $seat_cover = 4;

		public function parts(){
			return 'Test';
		}

	}

	$bmw = new Cars();
	echo $bmw->wheel . '<br>';
	//echo $bmw->air_bags;
	//echo $bmw->seat_cover;

	class Trucks extends Cars{

		public function system(){
			echo $this->seat_cover;
		}

	}

	$trucks = new Trucks;
	$trucks->system();


?>