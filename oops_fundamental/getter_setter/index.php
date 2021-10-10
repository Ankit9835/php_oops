<?php

	class Cars{

		private $air_bags = 4;

		public function get_values(){
			echo  $this->air_bags;
		}

		public function set_values(){
			echo $this->air_bags = 10;
		}


	}

	$bmw = new Cars();
	
	$bmw->set_values();
	$bmw->get_values();



?>