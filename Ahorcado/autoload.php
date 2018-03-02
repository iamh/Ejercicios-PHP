<?php 
	function loader($class) {
		include "class/". $class . ".php";
	}
	spl_autoload_register("loader");


?>