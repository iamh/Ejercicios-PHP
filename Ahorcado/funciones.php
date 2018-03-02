<?php
	
	function imagen($num) {
		switch ($num){
	        case 0:
	            echo '<p align="center"><img src="imagenes/0.png"></p>';
	            break;
	        case 1:
	            echo '<p align="center"><img src="imagenes/1.png"></p>';
	            break;
	        case 2:
	            echo '<p align="center"><img src="imagenes/2.png"></p>';
	            break;
	        case 3:
	            echo '<p align="center"><img src="imagenes/3.png"></p>';
	            break;
	        case 4:
	            echo '<p align="center"><img src="imagenes/4.png"></p>';
	            break;
	        case 5:
	            echo '<p align="center"><img src="imagenes/5.png"></p>';
	            break;
	        case 6:
	            echo '<p align="center"><img src="imagenes/6.png"></p>';
	            break;
	        case 7:
	            echo '<p align="center"><img src="imagenes/7.png"></p>';
	            break;
	        case 8:
	            echo '<p align="center"><img src="imagenes/8.png"></p>';
	            break;
	        default:
	            echo '';
	    }
	}

	function ganar() {
		echo 
		'<script type = "text/javascript">
            alert("FELICIDADES!! HAS ACERTADO!!");
        </script>';
	}

	function perder() {
		echo 
        '<script type = "text/javascript">
            alert("SORRY, HA PERDIDO");;
        </script>';
	}

	function jugarNuevamente() {
        session_destroy();
        echo
        '<script type="text/javascript">            
           	if (confirm("DESEA JUGAR DE NUEVO?") == true)
               	window.location = "index.php";
        </script>';
    }

    function palabraVacio($palabra) {
	    if ($palabra == ''){
	        echo 
	        '<script type = "text/javascript">
	            alert("Debe ingresar una palabra");
	            function redireccionar(){
	        	    window.location="index.php";
	            } 
	            setTimeout ("redireccionar()", 1);
	        </script>';
	    }
	}

	function letraVacio($letra) {
	    if ($letra == ''){
	        echo 
	        '<script type = "text/javascript">
	            alert("Debe ingresar una letra");
	        </script>';
	        return true;
	    }
	    return false;
	}


    function palabraPermitida($palabra) {
    	$palabraPermitida = "abcdefghijklmnñopqrstuvwxyz";
    	$longitud = strlen($palabra);
        for ($i = 0; $i < $longitud; $i++) {
           	if (stripos($palabraPermitida, substr($palabra,$i,1)) === false) {
              	echo 
              	'<script type = "text/javascript">
           			alert("La palabra no puede contener TILDES, NUMEROS o Caracteres Especiales");
            		function redireccionar() { 
            			window.location="index.php";
            		}
            		setTimeout ("redireccionar()", 1);
        		</script>';
              	$i = $longitud + 1;
           	}
        }
    }

?>