<?php
	class Customer {
		private $id;
		private $nombre;
		private $correo;

		public function __construct($id, $nombre, $correo) {
			$this->id = $id;
			$this->nombre = $nombre;
			$this->correo = $correo;

		}

		public function __toString() {
			return "Nombre: $this->nombre, ID: $this->id, Correo: $this->correo";
		}

	}
?>