<?php

	class Cars{

		static $wheel = 4;

		static function parts(){
			return self::$wheel;
		}

	}

	class Trucks extends Cars{

		static function test(){
			echo parent::parts();
		}

	}

	Trucks::test();


?>