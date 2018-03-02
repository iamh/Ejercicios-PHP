<?php
	class Circulo extends Figuras {
        private $radio;
        
		function __construct($nombre, $color, $radio) {
			parent::__construct($nombre, $color);
            $this->radio = $radio;
 		}

         function createCircleImage(){
            $r = hexdec($this->color[1].$this->color[2]);
            $g = hexdec($this->color[3].$this->color[4]);
            $b = hexdec($this->color[5].$this->color[6]);
            $image = imagecreatetruecolor( $this->radio,  $this->radio);
            $color1 = imagecolorallocate($image, $r,$g,$b);
            $color2 = imagecolorallocate($image, 255, 255, 255);
            imagefilledrectangle($image, 0, 0,  $this->radio,  $this->radio, $color2);
            imagefilledellipse($image,  $this->radio/2,  $this->radio/2,  $this->radio,  $this->radio, $color1);
            echo "<h1>Circulo</h1><br>";
            ob_start();
            imagepng($image);
            $img = ob_get_clean();
            echo "<img src='data:image/png;base64,". base64_encode($img)."'>";
        }

		public function __toString() {
            return "Radio: $this->radio";
        }

	}
?>