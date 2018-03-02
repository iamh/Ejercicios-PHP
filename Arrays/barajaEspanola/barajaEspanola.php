<?php

	$arrayBarajas = array();

	// array barajas asignando img
	for ($i = 0; $i < 12; $i++) { 
		$j = $i+1;
	    $arrayBarajas[] = '<img src="img/basto/'. $j .'.jpg" />';
	}
	for ($i = 0; $i < 12; $i++) { 
		$j = $i+1;
	    $arrayBarajas[] = '<img src="img/copa/'. $j .'.jpg" />';
	}
	for ($i = 0; $i < 12; $i++) { 
		$j = $i+1;
	    $arrayBarajas[] = '<img src="img/espada/'. $j .'.jpg" />';
	}
	for ($i = 0; $i < 12; $i++) { 
		$j = $i+1;
	    $arrayBarajas[] = '<img src="img/oro/'. $j .'.jpg" />';
	}

		
	// funciones
	function showCards($array, $num) {
		if ($num <= 48) {
			for ($i = 0; $i < $num; $i++) { 
				echo $array[$i];
			}
		}
	}

	function lcg_randf($min, $max) {
    	return $min + lcg_value() * abs($max - $min);
	}

	function mixCards($array) {
		$arrayAux = array();
		for ($i = 0; $i < 48; $i++) { 
			$rand = (int) lcg_randf(0 , count($array));
			array_push($arrayAux, $array[$rand]);
			unset($array[$rand]);
			$array = array_values($array);
		}
		showCards($arrayAux, count($arrayAux));
	}

	function pickCards($array, $num) {
		shuffle($array);
		showCards($array, $num);
	}
	

	// botones
	if (isset($_POST["mostrar"]))	showCards($arrayBarajas, count($arrayBarajas));

	if (isset($_POST["barajar"]))	 mixCards($arrayBarajas);
	
	if (isset($_POST["cartas"])) 	pickCards($arrayBarajas, $_POST["cartas"]);


?>