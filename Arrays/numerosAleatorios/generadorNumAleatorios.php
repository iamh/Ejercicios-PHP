<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		table {
			float: left;
			border: 1px solid black;
			width: 45px;
		}

		td {
			border: 1px solid black;
			text-align: center;;
		}

	</style>
</head>
<body>

	<?php

		$arrayValores = array();

			for ($i = 0 ; $i < 20; $i++) {
				$arrayValores[$i] = array();
				for ($j = 0 ; $j < 20; $j++) {
		 			array_push($arrayValores[$i], rand(1, 1000));
		 		}
			}

			foreach ($arrayValores as $key => $value) {
				echo '<table cellspacing= 2>';
				
				foreach ($value as $key2 => $value2) {
					echo "<tr>
					   	    <td>". $value2 ."</td>
					  	  </tr>";
				}
				echo "</table>";		
			}

	?>

</body>
</html>


