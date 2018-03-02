<?php
  require_once "autoload.php";
  $color = $_POST['color'];
 
  if (isset($_POST['sideB'])) {
    $sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $figura = new Rectangulo("Rectangulo", $color, $sideA, $sideB);
    $figura->createRectangleImage();
    $perimetro = $sideA * $sideB;
    echo "<br><br>Mi perimetro es: $perimetro";
  } elseif (isset($_POST['sideA'])) {
    $sideA = $_POST['sideA'];
    $figura = new Cuadrado("Cuadrado", $color, $sideA);
    $figura->createSquareImage();
    $perimetro = pow($sideA, '2');
    echo "<br><br>Mi perimetro es: $perimetro";
  } else {
    $radio = $_POST['radio']*2;
    $figura = new Circulo("Circulo", $color, $radio);
    $figura->createCircleImage();
    $area = pow($radio, '2')*3.14;
    echo "<br><br>Mi area es: $area";
  }
?>