<?php
	class Cuadrado extends Figuras {
		private $side;

		function __construct($nombre, $color, $side) {
			parent::__construct($nombre, $color);
			$this->side = $side;
		}

		function createSquareImage() {
			$r = hexdec($this->color[1].$this->color[2]);
            $g = hexdec($this->color[3].$this->color[4]);
            $b = hexdec($this->color[5].$this->color[6]);
			$image = imagecreatetruecolor($this->side, $this->side);
			$color1 = imagecolorallocate($image, $r, $g, $b);
			imagefilledrectangle($image, 0, 0, $this->side, $this->side, $color1);
			echo "<h1>Cuadrado</h1><br>";
			ob_start();
            imagepng($image);
            $img = ob_get_clean();
            echo "<img src='data:image/png;base64,". base64_encode($img)."'>";
		}

	}
?>