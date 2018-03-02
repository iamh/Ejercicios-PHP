<?php

	$idioma = $_COOKIE["preferencia"]["idioma"];

	$str_info = file_get_contents("idiomas.json");
	$info = json_decode($str_info, true);

	$titulo = $info[$idioma]["tit"];
	$datos = $info[$idioma]["dat"];
	$nombre = $info[$idioma]["nom"];
	$nota = $info[$idioma]["not"];
	$enviar = $info[$idioma]["env"];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo ?></title>
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
				<legend><?php echo $datos ?></legend>
		       
		        	<br>
		            <?php echo $nombre ?><br>
		            <input type="text" value="" name="nombre" size="30"><br><br>
		            <?php echo $nota ?></br>
		            <input type="number" value="" name="nota" size="10"><br><br>
		            <br>
		            <input type="submit" value="<?php echo $enviar ?>" name="spain"><br><br>
		        
		   </fieldset>
		</form>

	</div>
	
    

</body>
</html>