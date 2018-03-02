<?php

	const NUMTABLAS = 8;

	for($tabla = 1; $tabla <= NUMTABLAS; $tabla++) {	
	
		echo '<table border= 1 cellspacing= 0 width= 150 style="float: left; margin: 20 100">';
		echo "<tr><th colspan= 2> Tabla del $tabla </th></tr>";
		 
			for($i = 1; $i <= 10; $i++) {
			   	echo "<tr>
			   			<td align= center> $tabla &nbsp x &nbsp $i &nbsp = </td>
			            <td align= center width= 30> ". ($tabla * $i) ."</td>
			  	     </tr>";
			 }
		 	echo "</table>";
	}
?>
