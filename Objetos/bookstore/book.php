<?php
	class Book {
		private $titulo;
		private $autor;

		public function __construct($titulo, $autor) {
			$this->titulo = $titulo;
			$this->autor = $autor;
		}

		public function __toString() {
			return "Libro título: $this->titulo, Autor: $this->autor";
		}

	}
?>