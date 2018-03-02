<?php

function loader($class) {
  include "Class/" . $class . ".php";
}
spl_autoload_register("loader");

?>