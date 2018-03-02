<?php
  function setFigureOptions ($figure) {
    if ($figure == 'circulo') {
      $placeholder = 'Radio...';
      $name = 'radio';
    } else {
      $placeholder = 'Ingrese lado...';
      $name = 'sideA';
    }

    echo "
    <h3>".strtoupper($figure)."</h3>
    <form action='index.php' method='post' class='d-flex flex-column second-form'>
      <input type='text' name='$name' pattern='[0-9]{1-4}' maxlength='4' placeholder='$placeholder' title='Max: 9999px' required autocomplete='off'>";
      if($figure == 'rectangulo') {
        echo "<input type='text' name='sideB' pattern='[0-9]{1-4}' maxlength='4' placeholder='$placeholder' title='Max: 9999px' required autocomplete='off'>";
      }
    echo "
      <br><br>
      <div>
        <input type='color' name='color' value='#000000'>
        <label for='color'>Señale un color</label>
      </div>
      <br>
      <input type='submit' name='print' value='Mostrar'>
    </form>
    ";
  }
?>