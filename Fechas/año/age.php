<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			background-color: #eee;
		}
		main {
			background-color: #fff;
		    padding: 1em;
		    border-radius: 5px;
		    display: flex;
		    min-width: 250px;
		}
		main > *{
    		width: 100%;
		}
		p {
			color: red;
		}
		.container {
			margin: auto;
			margin-top: 2em;
			margin-bottom: 2em;
			width: 80%;
		    border: 4px solid cadetblue;
            border-radius: 8px;
            background-color: #FAFAFA;
		}
		.frame1{
			border: 3px solid #003366;
			width: 30%;
			margin: auto;
			padding: 1em;
			margin-top: 1em;
			border-radius: 5px;
		}
		.frame2 {
			width: 88%;
			margin: auto;
			padding-bottom: 1em;
		}
	</style>
</head>
<body>
<main>
	<div class="container">
		<div class="frame1">
			<form action="age.php" method="POST">
			<h2>Ingresar te fecha de nacimiento</h2>
			Día:
			<select id="days" name="day"></select> 
			Mes:
			<select name="month">
				<option value="1">Enero</option>
				<option value="2">Febrero</option>
				<option value="3">Marzo</option>
				<option value="4">Abril</option>
				<option value="5">Mayo</option>
				<option value="6">Junio</option>
				<option value="7">Julio</option>
				<option value="8">Agosto</option>
				<option value="9">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>
			</select>
			Año:
			<select id="years" name="year"></select>
			<input type="submit" name="boton" value="Enviar">
			</form>
		</div>
		<div class="frame2">
			<?php
				if (isset($_POST["boton"])) {
					$fecha1 = new DateTime($_POST['year'] ."-". $_POST['month'] ."-". $_POST['day']);
					$fActual = getdate();
					$fecha2 = new DateTime($fActual['year'] ."-". $fActual['mon'] ."-". $fActual['mday']);
					$fecha = $fecha1->diff($fecha2);
					echo "<p> Tienes --> ";
					printf('%d años, %d meses, %d días', $fecha->y, $fecha->m, $fecha->d);
					echo "</p>";
				}
				
			?>
		</div>
	</div>
	<script type="text/javascript">
		days();
		years();

		function days() {
			var options = "";
			for(var day = 1 ; day <= 31; day++){
  				options += "<option>"+ day +"</option>";
  				document.getElementById("days").value = day;
			}
			document.getElementById("days").innerHTML = options;
		}
		function years() {
			var start = 1900;
			var end = new Date().getFullYear();
			var options = "";
			for(var year = start ; year <=end; year++){
  				options += "<option>"+ year +"</option>";
  				document.getElementById("years").value = year;
			}
			document.getElementById("years").innerHTML = options;
		}
	</script>
</main>
</body>
</html>