<?php
	
	$root = rand(0, 10);

	echo "<table border= 1 cellspacing= 0 width= 170>";
	
	if (is_numeric($_GET["num"])) {
		if ($_GET["num"] == $root) {
			echo '<tr style= background-color:green>
					<td align= center> He acertado!! </br>
									   Tu número: '. $_GET["num"] .' root: '. $root .'</td>
				</tr>';
		}	else {
				echo '<tr style= background-color:red>
						<td align= "center"> No has acertado!! </br>
									Tu número: '. $_GET["num"] .' root: '. $root .'</td>
					</tr>';
		}
	}	else
			echo '<tr>
					<td align= "center" color= "red"> No has tecleado un número </td>
				</tr>';

	echo "</table> <br/>";

?>