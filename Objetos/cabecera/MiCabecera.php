<?php
	class miCabecera {
		public $titulo;
		public function __construct($tit) {
			$this->titulo = $tit;
		}
		public function __toString() {
			return "<h1 style=' 
				border: 1px solid;
				background-color: #F78181;
				width: 40%; 
				margin: auto; 
				color: #BCF5A9;
				text-align: center;
			'>Ejercicio $this->titulo<h1>";
		}
	}
?>