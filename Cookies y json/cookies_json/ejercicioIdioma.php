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
		h2 {
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
		.frame1 {
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
		.buttons {
			margin-left: 3em;
			margin-right: 3em;
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
									    <option value="ch">Chino</option>
									</select> <br><br>
			  		Color del texto <input type="color" name="ctexto">
									<br><br>
					Color del fondo <input type="color" name="cfondo">
									<br><br>
					<div >
						<input type="submit" name="boton" value="Enviar" class="buttons">
						<button class="buttons"><a target="_blank" href="http://localhost/ejerciciosPHP/ejerciciosTema_12_json/indexAlumno.php" >Fichero</a></button>
						<button class="buttons"><a href="http://localhost/ejerciciosPHP/ejerciciosTema_12_json/">Home</a></button>
					</div>
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
				var_dump($_COOKIE);
			}
		?>
		</div>
	</div>
</main>
</body>
</html>