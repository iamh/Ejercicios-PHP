<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ejercicio 1</title>
	<style type="text/css">
		body {
			background-color: #eee;
		}
		main {
			background-color: #fff;
			padding: 1em;
			border-radius: 5px;
			display: flex;
			min-width: 250px;
		}
		main > *{
    	width: 100%;
		}
		.container {
			margin: auto;
			margin-top: 2em;
			margin-bottom: 2em;
			width: 80%;
			border: 4px solid cadetblue;
			border-radius: 8px;
			background-color: #FAFAFA;
		}
		.frame{
			border: 3px solid #003366;
			width: 40%;
			margin: auto;
			padding: 1em;
			margin-top: 1em;
			margin-bottom: 2em;
			border-radius: 5px;
		}
		h2 {
			text-align: center;
			margin-top: 0;
			background-color: #E2A9F3;
			color: 
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="frame">
      <form action="index.php" method="post" class="d-flex flex-column first-form">
				<h2>Escoja una figura</h2>
        <div>
          <input type="radio" value="circulo" name="figure" required>
          <label for="circle">Circulo</label>
        </div>
        <div>
          <input type="radio" value="cuadrado" name="figure" required>
          <label for="square">Cuadrado</label>
        </div>
        <div>
          <input type="radio" value="rectangulo" name="figure" required>
          <label for="rectangle">Rectangulo</label>
        </div>
				<br>
        <input type="submit" value="Siguiente" name="next">
				<br><br>
      </form>
      <?php
        if(isset($_POST['next'])) {
          require_once('utils/figure_options.php');

          if(isset($_POST['figure'])) {    
            $figure = $_POST['figure'];
            setFigureOptions($figure);
          }
        }

        if(isset($_POST['print'])) {
          require_once('utils/create_figure.php');
         }
      ?>
		</div>
	</div>
</body>
</html>