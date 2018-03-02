<?php
	class Cabecera {
		public $titulo;
		public function __construct($tit) {
			$this->titulo = $tit;
		}
		public function __toString() {
			return "<header>
						<h1 style=' 
						border: 1px solid;
						background-color: #CC2EFA;
						width: 40%; 
						margin: auto; 
						color: #BCF5A9;
						text-align: center;'>
						Ejercicio $this->titulo
						<h1>
					</header>";
		}
	}
?>