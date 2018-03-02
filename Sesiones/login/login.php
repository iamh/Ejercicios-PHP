<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
    	#contenedor {
       		margin: auto;
			width: 1200px;

		}
    	.cuadro {
    		margin: auto;
    		margin-top: 4em;
    		margin-right: 2em; 
			width: 30%;
			float: left;
		}
    </style>
</head>
<body>
	<div id="contenedor">
		<div>
			<form action="acreditacion.php" method="POST">
				<fieldset class="cuadro">
					<legend>Datos Usuario</legend>
			       
			        	<br>
			            Usuario<br>
			            <input type="text" name="identificativo" size="30"><br><br>
			            Contraseña<br>
			            <input type="password" name="clave" size="30"><br><br>
			            <input type="submit" value="Entrar" name="login"><br><br>
			        
			   </fieldset>
			</form>
		</div>
		<div>
			<form method="POST" action="">
				<fieldset class="cuadro">
					<legend>Registrarse</legend>
			            Usuario<br>
			            <input type="text" name="usuario" size="30" required/><br><br>
			            Nombre Completo<br>
			            <input type="text" name="nombre" size="30" required/><br><br>
			            Contraseña<br>
			            <input type="password" name="clave" size="30"required/><br><br>
			            <input type="submit" name="signup" value="Registrar"><br><br>

			            <?php
							if ($_POST){
							   $error_encontrado="";
							   if (validar_clave($_POST["clave"], $error_encontrado)){
							     	echo "PASSWORD VÁLIDO";
							     	echo "<br>";
							     	echo "Ya estas registrado ya puedes ingresar";

								    $usuario = $_POST["usuario"];
									$nombre = $_POST["nombre"];
									$clave = $_POST["clave"];
									setcookie('preferencia[usuario]', $usuario, time()+1000000000);
									setcookie('preferencia[nombre]', $nombre, time()+1000000000);
									setcookie('preferencia[clave]', $clave, time()+1000000000);
							   }else{
							      echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
							      echo "<br>";
							   }
							}
			
			        	?>
			   </fieldset>
			</form>
			<?php

				function validar_clave($clave,&$error_clave){

				   	if(strlen($clave) < 6){
				    	$error_clave = "La clave debe tener al menos 6 caracteres";
				      	return false;
				   	}
				   	if(strlen($clave) > 16){
				      	$error_clave = "La clave no puede tener más de 16 caracteres";
				      	return false;
				   	}
				   	if (!preg_match('`[a-z]`',$clave)){
				      	$error_clave = "La clave debe tener al menos una letra minúscula";
				      	return false;
				   	}
				   	if (!preg_match('`[A-Z]`',$clave)){
				    	$error_clave = "La clave debe tener al menos una letra mayúscula";
				      	return false;
				   	}
				   	if (!preg_match('`[0-9]`',$clave)){
				      	$error_clave = "La clave debe tener al menos un caracter numérico";
				      	return false;
				   	}
				   	$error_clave = "";
				   	return true;
				}
			?>

				
		</div>

	</div>
</body>
</html>