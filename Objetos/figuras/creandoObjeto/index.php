<?php
	require_once "autoload.php";

	$figura = new Cuadrado("Cuadrado", "#01DF3A", "200");
	$figura->createSquareImage();
	echo "<img src = './img/figure.png'><br>";
?>