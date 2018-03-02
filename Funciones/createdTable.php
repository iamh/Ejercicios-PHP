<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		h2{
			margin-top: 0;
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
			width: 25%;
			margin: auto;
			padding: 1em;
			margin-top: 1em;
			margin-bottom: 2em;
			border-radius: 5px;
		}
		.frame2 {
			width: 90%;
			margin: auto;
			padding-bottom: 1em;
			margin-bottom: 2em;
		}
	</style>
</head>
<body>
<main>
	<div class="container">
		<div class="frame1">
			<form method="POST">
				<h2>Ingresar elementos de la tabla</h2>
				<input type="text" name="file" size="10" /> Filas <br><br>
				<input type="text" name="colum" size="10" /> Columnas <br><br>
				<input type="text" name="width" size="10" /> Ancho px <br><br>
				<input type="text" name="height" size="10" /> Alto px <br><br>
				<input type="text" name="border" size="10" /> Borde px <br><br>
				<input type="color" name="bgcolor" size="10" /> Color fondo <br><br>
				<input type="submit" name="boton" value="Enviar">
			</form>
		</div>
		<div class="frame2">
		<?php
			if (isset($_POST["boton"])) {
				$file = $_POST["file"];
				$colum = $_POST["colum"];
				$width = $_POST["width"];
				$height = $_POST["height"];
				if (isset($_POST["border"]))
					$border = $_POST["border"];
				else
					$border = 1;
				$bgcolor = $_POST["bgcolor"];
				require_once("functionTable.php");
			}
		?>
		</div>
	</div>
</main>
</body>
</html>