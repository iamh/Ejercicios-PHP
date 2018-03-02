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
			font-size: 2rem;
		}

		#yes {
			background-color: #A9F5A9;
		}

		#not {
			background-color: red;
		}
    </style>
</head>
<body>
	
		<?php
			$datosUsuario = array("iamh", "iamh3891@gmail.com", "1234");

			if ($_GET["usuario"] == $datosUsuario[0] &&  $_GET["email"] == $datosUsuario[1] &&  $_GET["contrasena"] == $datosUsuario[2])
	
				
		
				echo "<div class='cuadro' id='yes'>Bienvenido ". $_GET["usuario"] ."</div>";
	
				
		
			else
				echo "<div class='cuadro' id='not'>Acceso no autorizado";
		?>
	
</body>
</html>