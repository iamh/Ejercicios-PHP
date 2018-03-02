<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar notas</title>
    <style type="text/css">
    	#contenedor {
    		margin: auto;
			width: 1200px;
		}

    	.cuadro {
    		margin: auto;
    		margin-top: 50px;
			width: 30%;
			background-color: <?php echo $_COOKIE["preferencia"]["cfondo"]; ?>;
			color: <?php echo $_COOKIE["preferencia"]["ctexto"]; ?>;
		}
		
    </style>
</head>
<body>
	<div id="contenedor">
		<form action="notasAlumno.php" class="spain" method="POST">
			<fieldset class="cuadro">
				<legend>Datos Alumno</legend>
		       
		        	<br>
		            Nombre completo<br>
		            <input type="text" value="" name="nombre" size="30"><br><br>
		            Nota</br>
		            <input type="number" value="" name="nota" size="10"><br><br>
		            <br>
		            <input type="submit" value="Enviar" name="spain"><br><br>
		        
		   </fieldset>
		</form>

		<form action="notasAlumno.php" class="english" method="POST">
			<fieldset class="cuadro">
				<legend>Student Data</legend>
		       
		        	<br>
		            Full Name<br>
		            <input type="text" value="" name="nombre" size="30"><br><br>
		            Note</br>
		            <input type="number" value="" name="nota" size="10"><br><br>
		            <br>
		            <input type="submit" value="Enviar" name="english"><br><br>
		        
		   </fieldset>
		</form>
	</div>
	<?php
			if ($_COOKIE["preferencia"]["idioma"] == "es") {
				echo "<style> .english { display: none; }";
			}
			if ($_COOKIE["preferencia"]["idioma"] == "en") {
				echo "<style> .spain { display: none; }";
			}

	?>
    

</body>
</html>