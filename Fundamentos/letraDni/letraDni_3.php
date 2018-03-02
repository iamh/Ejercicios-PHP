<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">

		.cuadro {
    		border: 1px solid black;
    		margin: auto;
    		margin-top: 50px;
    		padding: 15px;
			width: 300px;
			text-align: left;
		}
    	.cuadro2 {
    		border: 1px solid black;
    		margin: auto;
    		margin-top: 50px;
    		padding: 15px;
			width: 200px;
			text-align: center;
			background-color: #F5BCA9;
		}

    </style>
</head>
<body>

	<?php
		if (!$_GET) {
	?>
		<form method="GET" action="letraDni_3.php">
			<fieldset class="cuadro">
			<legend>Datos DNI</legend> <br>
			    Ingresa tu DNI <br>
			    <input type="text" name="dni" size="30"/> <br> <br> <br>
			    <input type="submit"/> <br> <br>
			</fieldset>
		</form>
	<?php
		}	else {
	?>
			<div class="cuadro2">
	<?php
			$valor = $_GET["dni"] % 23;
	        $letras = "TRWAGMYFPDXBNJZSQVHLCKEO";
	        $letraDni = substr ($letras, $valor, 1);

	        echo "Su DNI es: ". $_GET["dni"] . $letraDni;
    ?>
	       </div>
	<?php
		}
	?>

</body>
</html>