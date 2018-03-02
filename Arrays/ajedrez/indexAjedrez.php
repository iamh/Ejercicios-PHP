<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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

		.contenedor {
			margin: auto;
			margin-top: 2em;
			margin-bottom: 2em;
			width: 500px;
			height: 500px;
			display: flex;
			border-style: inset;
		}

		.true {
			background-color: white;
		}

		.false {
			background-color: black;
		}

		table {
			width: 100%;
			height: 500px;
			border-spacing: 0;
			text-align: center;
		}

		td {
			width: 12.5%;
			height: 12.5%;
		}

		img {
			width: 90%;
		}

	</style>
</head>
<body>
	<main>

		<div class="contenedor">
		<?php

			// variables
			$arrayPiezas = array();
			$k = 0;

			// array figuras
			for ($i = 0; $i < 64; $i++) { 
			    $arrayPiezas[] = '<img src="imagenes/'. $i .'.png" />';
			}
		
			echo "<table>";
			for ($i = 0 ; $i < 8; $i++) {
				echo "<tr>";
				for ($j = 0 ; $j < 8; $j++) {
		 			if ($i % 2 == 0) {
		 				if ($j % 2 == 0)	echo "<td class='true'>". $arrayPiezas[$k] ."</td>";
		 					else 	echo "<td class='false'>". $arrayPiezas[$k] ."</td>";
		 			}	 else {
		 				if ($j % 2 == 0)	echo "<td class='false'>". $arrayPiezas[$k] ."</td>";
		 					else 	echo "<td class='true'>". $arrayPiezas[$k] ."</td>";
		 			}
		 			$k++;
		 		}
		 		echo "</tr>";
		 	}
		 	echo "</table>";

		?>
		</div> <!--/contenedor-->

	</main> <!--/main-->

</body>
</html>