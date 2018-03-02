<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadenas</title>
    <style type="text/css">
    	
    	#container {
    			width: 100%;
		}

    	.cuadro {
			border: 1px solid;
			margin-left: 5%;
    		margin-top: 50px;
			width: 500px;
			padding: 30px;
		}
	
    </style>
</head>
<body>
	<div id="container">

		<form method="POST" action="posiciones.php">
			<fieldset class="cuadro">
				<legend>Busca la Palabra</legend>
				<textarea rows="4" cols="50" placeholder="Write here..." name="text"> </textarea><br><br>
	            <input type='text' name='word' size= 35/><input type="submit" value="Buscar" name="search"> <br><br>
		   </fieldset>
		</form>

		<div class="cuadro">
			<?php

				if (isset($_POST["search"])) {
					$text = test_input($_POST["text"]);
					$word = test_input($_POST["word"]);
					$arrayText = explode(" ", $text);
					echo "Texto --> ";
					print_r($arrayText);
					echo '<br><br>';
					echo "La palabra a buscar es: ". $word. "<br><br>";
					echo "Sus posiciones son: ";
					searchPosicion($arrayText, $word);			
				}

				function searchPosicion($arrayText, $word) {
					$arrayPosition = array();
					for ($i = 0; $i < count($arrayText); $i++) { 
						if ($arrayText[$i] == $word)
							array_push($arrayPosition, $i);
					}
					print_r($arrayPosition);
				}

				function test_input($data) {
				  $data = trim($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
			?>
		</div>
	
	</div>
</body>
</html>


