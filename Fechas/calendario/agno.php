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
			<form method="POST">
			Ingresar un año:
			<input type="text" name="anio" size="10"> <input type="submit" name="boton1" value="Año">
			<select name="mes">
				<option></option>
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
			<input type="submit" name="boton2" value="Fecha">
			</form>
		</div>
		<div class="frame2">
			<?php
				if (isset($_POST["boton1"])) {
					$anio = $_POST["anio"];
					require_once("calendario_funciones.php");
				}
				if (isset($_POST["boton2"])) {
					$anio = $_POST["anio"];
					$mes = $_POST["mes"];
					require_once("calendario_funciones.php");
				}
			?>
		</div>
	</div>
</main>
</body>
</html>