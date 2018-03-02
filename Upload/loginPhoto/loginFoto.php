<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
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

    	.container {
			margin: auto;
    		width: 80%;
		}

    	.frame {
			border: 1px solid;
	   		margin-top: 3em;
			width: 30%;
			padding: 2em;
			margin-bottom: 3em;
		}
		
    </style>
</head>
<body>
	<main>
		<div class="frame">
			<?php
			echo "Inserción de la fotografía del usuario: <br><br>";
			?>
			<form action="loginFoto.php" method="post" enctype="multipart/form-data">
			<?php
			echo "Nombre usuario: <input type='text' name='usuario'/><br/><br>";
			echo "Fichero con su fotografía: <input type='file' name='imagen'/><br/><br>";
			?>
			<input type="submit" value="Enviar"><br/><br>
			</form>
			<div>

				<?php

				if (isset($_POST["usuario"])) {

				    if (is_uploaded_file ($_FILES['imagen']['tmp_name'])) {

				        $nomUs = $_POST["usuario"];
				        $nomDir = "../photo/";
				        $nomFile = $_FILES['imagen']['name'];
				        $ext = ".". pathinfo($nomFile, PATHINFO_EXTENSION);
				        $fullName = $nomDir.$nomFile;
				        if (is_dir($nomDir)) { // es un directorio existente

				         // $uniqueId = date('Y-m-d-H-m-s', time());
				         // $nomFile = $uniqueId."-".$nomUs.$ext;
				            
				        	$nomFile = $nomUs.$ext;
				            $fullName = $nomDir.$nomFile;
				            move_uploaded_file ($_FILES['imagen']['tmp_name'],$fullName);
				            echo "File uploaded with the name: $nomFile <br>";
				        }   else echo "Definitive directory invalid";

				    }   else    print ("Could not upload file\n");

				}

				?>

			</div>
		</div>

	</main>
</body>
</html>