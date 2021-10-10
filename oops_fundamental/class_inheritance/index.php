<?php

	/**
	 * 
	 */
	class Cars
	{
		var $wheels = 4;
		function greetings(){
			return "i have " . $this->wheels;
		}
	}

	$bmw = new Cars();

	/**
	 * 
	 */
	class Materials extends Cars
	{
		
		
	}

	$materials = new Materials();
	echo $materials->wheels;


?>