<?php
	session_start();
	
	if (isset($_GET['terminar_sesion'])){
		//Borramos todas las variables de la sesión
		$_SESSION=array();
		//Caducamos la cookie
		setcookie('PHPSESSID','',time()-3600);
		//destruimos los datos de la sesión en el script actual
		session_destroy();
		//redirigimos a la página de acreditación
		header('Location: login.php');
	}
	if (!isset($_SESSION['identificativo'])) {
		header('Location: login.php');
	}
	echo 'Hola '. $_COOKIE['preferencia']['nombre'];
	echo "<br>";
	echo '<a href="informacion.php?terminar_sesion=1">Terminar sesión</a><br />';
?>