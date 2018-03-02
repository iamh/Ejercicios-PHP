<?php

	if (isset($_POST["boton"])) createdTable($_POST["file"], $_POST["colum"], $_POST["width"], $_POST["height"], $_POST["border"], $_POST["bgcolor"]);

	function createdTable($file, $colum, $width, $height, $border, $bgcolor) {
		echo "<table border=". $border ." cellspacing=0 bgcolor=". $bgcolor ." width=". $width ." height=". $height .">";
		for ($i = 0; $i < $file; $i++) {
		    echo "<tr>";
	        for ($j = 0; $j < $colum; $j++) { 
	            echo "<td> </td>";
	        }
		    echo "</tr>";
	    }
		echo "</table>";
	}
?>
		