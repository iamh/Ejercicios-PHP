
<?php

	$temperaturas = array();
	$temperaturas['Caja_1'] = array(1,1,2,3,2,1,2,9,3,3,2,1,3,4);
	$temperaturas['Caja_2'] = array(0,0,3,2,4,3,2,0,1,2,3,4,2,1);
	$temperaturas['Caja_3'] = array(3,9,2,3,5,2,2,0,1,2,3,5,2,1);
	$temperaturas['Caja_4'] = array(2,2,2,3,5,2,3,2,0,1,2,3,0,1);
	$temperaturas['Caja_5'] = array(0,3,2,3,5,2,3,2,0,1,2,3,0,1);

	echo <<<"EOT"
	Cajas sometidas a una temperatura mayor a 4º -->  
EOT;

	foreach ($temperaturas as $indice => $valor) {
		foreach ($valor as $indice2 => $valor2) {
			if ($valor2 > 4) {
				echo <<<EOT
				$indice
EOT;
				break;
			}
		}
	}

?> 