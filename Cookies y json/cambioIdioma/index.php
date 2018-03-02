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
			text-align: center;
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
			width: 40%;
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
				<h2>Ingresar Datos</h2>
				<div>
					Idioma			<select name="idioma">
										<option> </option>
									    <option value="en">Inglés</option>
									    <option value="es">Español</option>
									</select> <br><br>
			  		Color del texto <select name="ctexto">
										<option> </option>
									    <option value="red">Rojo</option>
									    <option value="white">Blanco</option>
									    <option value="blue">Azul</option>
									</select> <br><br>
					Color del fondo <select name="cfondo">
										<option> </option>
									    <option value="yellow">Amarillo</option>
									    <option value="black">Negro</option>
									    <option value="blue">Azul</option>
									</select> <br><br>
					<input type="submit" name="boton" value="Enviar">			
				</div>
			</form>
		</div>
		<div class="frame2">
		<?php
			if (isset($_POST["boton"])) {
				$idioma = $_POST["idioma"];
				$ctexto = $_POST["ctexto"];
				$cfondo = $_POST["cfondo"];
				setcookie('preferencia[idioma]', $idioma, time()+1000000000);
				setcookie('preferencia[ctexto]', $ctexto, time()+1000000000);
				setcookie('preferencia[cfondo]', $cfondo, time()+1000000000);

				echo"Recarga la pagina para cargar los nuevos valores";
				include 'formAlumno.php';
			}
		?>
		</div>
	</div>
</main>
</body>
</html>