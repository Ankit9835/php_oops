<?php

	class Cars{

		static $wheel = 4;
		static $seat = 4;
		static $gear = 5;
		static function parts(){
			echo Cars::$wheel . '<br>';
			echo Cars::$gear . '<br>';
		}

	}

	Cars::parts();


?>