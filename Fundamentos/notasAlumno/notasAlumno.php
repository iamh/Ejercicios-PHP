<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
    	#contenedor {
    		margin: auto;
			width: 1200px;
		}

    	.cuadro {
    		margin: auto;
    		margin-top: 50px;
			width: 30%;
		}
    </style>
</head>
<body>
	<div id="contenedor">
		<div class="cuadro">

			<?php 
		        
		        if ($_GET["nota"] >= 5)
		            echo "EnhoraBuena  ". $_GET["nombre"] . " has  aprobado";
		        else
		            echo "Lo siento  ". $_GET["nombre"] . " has  suspendido";
			?>
			
		</div>
	</div>

</body>
</html>
