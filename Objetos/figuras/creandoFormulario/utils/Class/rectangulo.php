<?php
	class Rectangulo extends Figuras {
        private $sideA;
        private $sideB;
        

		function __construct($nombre, $color, $sideA, $sideB) {
			parent::__construct($nombre, $color);
            $this->sideA = $sideA;
            $this->sideB = $sideB;
		}

		function createRectangleImage(){
			$r = hexdec($this->color[1].$this->color[2]);
			$g = hexdec($this->color[3].$this->color[4]);
			$b = hexdec($this->color[5].$this->color[6]);
			$image = imagecreatetruecolor($this->sideA, $this->sideB);
			$color1 = imagecolorallocate($image, $r, $g, $b);
			imagefilledrectangle($image, 0, 0, $this->sideA, $this->sideB, $color1);
			echo "<h1>Rectangulo</h1><br>";
			ob_start();
            imagepng($image);
            $img = ob_get_clean();
            echo "<img src='data:image/png;base64,". base64_encode($img)."'>";
		}

		public function __toString() {
            return "LadoA: $this->sideA, LadoB: $this->sideB";
        }

	}
?>