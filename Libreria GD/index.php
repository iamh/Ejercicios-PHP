<?php

session_start();
$_SESSION['count']=time(); // cadena única almacenada

?>
    <title>Capcha</title>
    <body style="background-color:#ddd; ">
<?php
    $flag = 5;
	if (isset($_POST["flag"])) { // verificar que la variable POST no esté vacía
	    $input = $_POST["input"];
	    $flag = $_POST["flag"];
	}
	if ($flag == 1) { // enviar ha sido cliqueado
	    if (isset($_SESSION['captcha_string']) && $input == $_SESSION['captcha_string']) { // la entrada del usuario y la cadena de captcha son iguales
?>
	        <div style="text-align:center;">
	            <h1>Tu respuesta es correcta!</h1>
	            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!--refresh the page-->
	                <input type="submit" value="recarga la página">
	            </form>
	        </div>
<?php
	    } else { // respuesta incorrecta, captcha se muestra de nuevo
?>
	        <div style="text-align:center;">
	            <h1>Tu respuesta es incorrecta!<br>Inténtalo de nuevo</h1>
	        </div>
<?php
	        create_image();
	        display();
	    }
	} else { // la página acaba de ser cargada
    	create_image();
	    display();
	}

    /***** definición de funciones *****/
    function display() {
?>
        <div style="text-align:center;">
	        <h3>ESCRIBE EL TEXTO QUE VES EN LA IMAGEN</h3>
	        <b>Esto es solo para verificar si eres un robot</b>
	        <div style="display:block;margin-bottom:20px;margin-top:20px;">
	            <img src="image<?php echo $_SESSION['count']?>.png">
	        </div>
	        <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"/ >
		        <input type="text" name="input"/>
		        <input type="hidden" name="flag" value="1"/>
		        <input type="submit" value="Enviar" name="submit"/>
	        </form>
	        <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	            <input type="submit" value="recarga la página">
	        </form>
    	</div> 
<?php
    }

    function  create_image() {

        $image = imagecreatetruecolor(200, 50);
        // cambiar fondo
        $background_color = imagecolorallocate($image, 255, 255, 255);  
		imagefilledrectangle($image,0,0,200,50,$background_color);
		// generar lineas aleatorias
		$line_color = imagecolorallocate($image, 64,64,64); 
		for ($i = 0; $i < 10; $i++) {
		    imageline($image,0,rand()%50,200,rand()%50,$line_color);
		}
		// generar puntos aleatorios
		$pixel_color = imagecolorallocate($image, 0,0,255);
		for($i = 0; $i < 1000; $i++) {
		    imagesetpixel($image,rand()%200,rand()%50,$pixel_color);
		}
		// generar texto aleatorio
		$letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$len = strlen($letters);
		$letter = $letters[rand(0, $len-1)];
		$text_color = imagecolorallocate($image, 0,0,0);
		$word = '';
		for ($i = 0; $i< 6;$i++) {
		    $letter = $letters[rand(0, $len-1)];
		    imagestring($image, 5,  5 + ($i * 30), 20, $letter, $text_color);
		    $word.= $letter;	// validando
		}
		$_SESSION['captcha_string'] = $word;	// validando
		// generar imagen
		$images = glob("*.png");
		foreach ($images as $image_to_delete) {
		    unlink($image_to_delete);      
		}
		imagepng($image,"image".$_SESSION['count'].".png");
        
    }
?>
    </body>
