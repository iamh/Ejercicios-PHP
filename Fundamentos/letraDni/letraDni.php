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
			width: 200px;
			text-align: center;
			background-color: #CEECF5;
		}
    </style>
</head>
<body>
	<div class="cuadro">
		<?php 
	      
	        $valor = $_GET["dni"] % 23;
	        $letras = "TRWAGMYFPDXBNJZSQVHLCKEO";
	        $letraDni = substr ($letras, $valor, 1);

	        echo "Su DNI es: ". $_GET["dni"] . $letraDni;
		?>
	</div>
</body>
</html>