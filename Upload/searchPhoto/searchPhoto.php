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
    		border: 1px solid;
			margin: auto;
    		width: 40%;
    		background-image: url("fondo/fondo.jpg");
		}

    	.frame {
			border: 5px solid #424242;
			margin: auto;
	   		margin-top: 2em;
			width: 80%;;
			padding: 1em;
			margin-bottom: 2em;
			color: white;
		}

		.frame2 {
			border: 20px solid #424242;
			margin: auto;
	 		width: 70%;
	 		height: 700px;
			margin-bottom: 2em;
			text-align: center;
			background-color: #E0E0F8;
			color: #424242;
		}

		img {
			width: 90%;
	
		}
		
    </style>
</head>
<body>
	<main>
		<div class="container">
			<div class="frame">
				
				<form action="searchPhoto.php" method="post" enctype="multipart/form-data">
				<?php
					echo "Ingrese el nombre completo del usuario:&nbsp&nbsp<input type='text' name='usuario' size= 35/>&nbsp&nbsp&nbsp&nbsp<input type='submit' value='Buscar'/>";
				?>
				</form>
				
			</div>
			<div class="frame2">
				
				<?php

					if (isset($_POST["usuario"])) {
						
						$user = $_POST["usuario"];
					    $directory = '../photo';
					    $arrayDir = scandir($directory);

					    show($arrayDir, $user);
					}

					function show($dir, $user) {
					   	for ($i = 0; $i < count($dir); $i++) {
					   		$var = preg_replace('/\\.[^.\\s]{3,4}$/', '', $dir[$i]);
					   		if ($var == $user) {
					   			echo "<br>". $var ."<br><br>";
					   			if (preg_match( '/'.'jpeg'.'/i', $dir[$i]) || preg_match( '/'.'jpg'.'/i', $dir[$i]) || preg_match( '/'.'png'.'/i', $dir[$i]) ) 	/* Filtro solo los tipos de imagenes que queramos. .gif, .jpg, .png */
					   				echo "<img src='../photo/$user'>";
					   			else
					   				echo "El tipo de imagen no esta dentro del filtro.";
						   	}
					   	}
				    }
					 
				?>

			</div>
		</div>
	</main>
</body>
</html>

