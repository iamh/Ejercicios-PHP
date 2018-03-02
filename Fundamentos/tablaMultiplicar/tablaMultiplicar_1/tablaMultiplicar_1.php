<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">

    	.cuadro {
    		margin: auto;
    		margin-top: 50px;
		}

		table {
			border: 1px solid black;
			border-collapse: separate;
			width:150px;
			margin: auto;
			background-color: #D8D8D8;
		}

		td {
			border: 1px solid black;
			padding: 5px;
			text-align: center;
			background-color: #F6D8CE;

		}


    </style>
</head>
<body>
	<div class="cuadro">

			<?php

				$num = $_GET["num"];

					echo "<table>";
					echo "<tr><th colspan= 2> Tabla del $num </th></tr>";
					 
						for($i = 1; $i <= 10; $i++) {
						   	echo "<tr>
						   			<td> $i &nbsp x &nbsp $num &nbsp = </td>
						            <td width= 30> ". ($i * $num) ."</td>
						  	     </tr>";
						 }
					 	echo "</table>";
				
			?>

	</div>


</body>
</html>