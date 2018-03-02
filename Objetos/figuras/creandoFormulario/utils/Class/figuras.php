<?php
	abstract class Figuras {
		protected $nombre;
		protected $color;

		public function __construct($nombre, $color) {
			$this->nombre = $nombre;
			$this->color = $color;
		}

		public function __toString() {
			return "Nombre: $this->nombre";
		}
	}
?>