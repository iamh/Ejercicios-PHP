<?php
	session_start();

	if (!isset($_SESSION['identificativo'])){//¿No está ya acreditado?
		if(isset($_REQUEST['identificativo']) && isset($_REQUEST['clave'])){//¿Ha rellenado el formulario?
			if($_REQUEST['identificativo']==$_COOKIE['preferencia']['usuario'] && $_REQUEST['clave']=$_COOKIE['preferencia']['clave']){//Son correctas las credenciales
			$_SESSION['identificativo']=$_REQUEST['identificativo'];
			header('Location: informacion.php');
			}	else { //No son correctas las credenciales
				header('Location: acreditacion.php');
			}
		}	
	}	else {//Sí está ya acreditado
		header('Location: informacion.php');
	}
?>