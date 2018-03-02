<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<style>
		table {
			font-family: Arial;
			font-size: 0.8em;
			margin-right: 1rem;
			float: left;
		}
		caption {
			text-align: center;
			padding: 5px 10px;
			background-color: #003366;
			color: #fff;
			font-weight: bold;
		}
		th {
			background-color: #006699;
			color: #fff;
			width: 40px;
		}
		td {
			padding: 2px 5px;
			background-color: silver;
			text-align: center;
		}
		.hoy {
			background-color:red;
		}
	</style>
</head>
<body>
<?php

	if (isset($_POST["boton1"])) calendarAnual($_POST["anio"]);
	if (isset($_POST["boton2"])) calendarMes($_POST["anio"], $_POST["mes"]);


	function calendarAnual($year) {
		$diaActual = date("j");
		$monthActual = date("n");
		$yearActual = date("Y");
		$month = 1;

		echo "<h2> Calendario del año $year </h2>";

		$meses = array(1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
		"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

		for ($k = 0; $k < 3; $k++) {
			for ($j = 0; $j < 4; $j++) {
				$diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year)) + 7;
				$ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));
				echo "
						<table>
							<caption> $meses[$month] </caption>
							<tr>
								<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
								<th>Vie</th><th>Sab</th><th>Dom</th>
							</tr>
							<tr bgcolor=silver>";
								$last_cell = $diaSemana + $ultimoDiaMes;
								
								for($i = 1; $i <= 42; $i++) {	// bucle hasta 42, 6 columnas de 7 dias
									if($i == $diaSemana)	// determinamos en que dia empieza
										$day = 1;
									if($i < $diaSemana || $i >= $last_cell)		// celca vacia
										echo "<td> &nbsp; </td>";
									else {	// mostramos el dia
										if($day == $diaActual && $month == $monthActual && $year == $yearActual)
											echo "<td class='hoy'>$day</td>";
										else
											echo "<td> $day </td>";
										$day++;
									}	
									if($i % 7 == 0)	// cuando llega al final de la semana, iniciamos una columna nueva
										echo "</tr><tr>\n";
								}
				echo "		</tr>
						</table>";
				$month++;
			}
			echo "<br><br><br><br><br><br><br><br><br><br>";
		}
	}

	function calendarMes($year, $month) {
		$diaActual = date("j");
		$monthActual = date("n");
		$yearActual = date("Y");
	
		echo "<h2> Mes del año $year </h2>";

		$meses = array(1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
		"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

				$diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year)) + 7;
				$ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));
				echo "
						<table>
							<caption> $meses[$month] </caption>
							<tr>
								<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
								<th>Vie</th><th>Sab</th><th>Dom</th>
							</tr>
							<tr bgcolor=silver>";
								$last_cell = $diaSemana + $ultimoDiaMes;
								
								for($i = 1; $i <= 42; $i++) {	// bucle hasta 42, 6 columnas de 7 dias
									if($i == $diaSemana)	// determinamos en que dia empieza
										$day = 1;
									if($i < $diaSemana || $i >= $last_cell)		// celca vacia
										echo "<td> &nbsp; </td>";
									else {	// mostramos el dia
										if($day == $diaActual && $month == $monthActual && $year == $yearActual)
											echo "<td class='hoy'>$day</td>";
										else
											echo "<td> $day </td>";
										$day++;
									}	
									if($i % 7 == 0)	// cuando llega al final de la semana, iniciamos una columna nueva
										echo "</tr><tr>\n";
								}
				echo "		</tr>
						</table>";
				echo "<br><br><br><br><br><br><br><br><br><br>";
		}

?>
</body>
</html>










