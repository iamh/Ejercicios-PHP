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

		<form method="POST" action="posiciones2.php">
			<fieldset class="cuadro">
				<legend>Busca la Palabra</legend>
				<textarea rows="4" cols="50" placeholder="Write here..." name="text"> </textarea><br><br>
	            <input type='text' name='word' size= 35/> <input type="submit" value="Search" name="search"> <br><br>
	            <input type='text' name='newWord' size= 35/> <input type="submit" value="Replace" name="replace"> <br><br>
	            <input type="submit" value="Exists" name="exists">
	        
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

				if (isset($_POST["exists"])) {
					$text = test_input($_POST["text"]);
					$word = test_input($_POST["word"]);
					$arrayText = explode(" ", $text);

					if (in_array($word, $arrayText))
					    echo "Existe";
					else
						echo "No existe";
				}

				if (isset($_POST["replace"])) {
					$text = test_input($_POST["text"]);
					$word = test_input($_POST["word"]);
					$newWord = test_input($_POST["newWord"]);
					$arrayText = explode(" ", $text);
					echo "Texto --> ";
					print_r($arrayText);
					echo '<br><br>';
					echo "La palabra a buscar es: ". $word. "<br><br>";
					echo "La palabra a nueva es: ". $newWord ."<br><br>";
					echo "Frase completada: ";
					replaceWord($arrayText, $word, $newWord);	

					
				}

				function replaceWord($arrayText, $word, $newWord) {
					for ($i = 0; $i < count($arrayText); $i++) { 
						if ($arrayText[$i] == $word)
							$arrayText[$i] = $newWord;
					}
					print_r($arrayText);
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