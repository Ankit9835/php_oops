<?php

	class Cars{

		public function greeting(){

		}

		public function greeting2(){

		}

	}

	$methods = get_class_methods('Cars');
	foreach ($methods as $method) {
		echo $method . "<br>";
	}

?>