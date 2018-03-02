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
			width: 450px;
			text-align: left;
			background-color: #A9F5A9;
			font-size: 2em;
		}
    </style>
</head>
<body>
	<div class="cuadro">
		<?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$usuarios = array();
				$usuarios["nombre"] = test_input($_POST["usuario"]);
				$usuarios["emails"] = test_input($_POST["email"]);
         		$usuarios["password"] = test_input($_POST["pass"]);
         		$usuarios["genero"] = $_POST["sexo"];
         		$usuarios["idiomas"] = $_POST["lenguajes"];
         		$usuarios["nacionalidades"] = $_POST["nacionalidad"];
         		$usuarios["aficion"] = $_POST["aficiones"];

         	}
     
         	function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
         		
         	foreach ($usuarios as $i => $valor) {
		
				if ($i == "idiomas") {
					foreach ($valor as $j => $valor2) {
						echo $valor2 .", ";
					}
					echo "<br>";
				} else {
					echo $valor;
	         		echo "<br>";
				}
				
			} 

     	?>
	</div>
</body>
</html>