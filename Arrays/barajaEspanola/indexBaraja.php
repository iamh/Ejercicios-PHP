<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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

		.contenedor {
			margin: auto;
			margin-top: 2em;
			margin-bottom: 2em;
			width: 80%;
			height: 715px;
			display: flex;
			flex-direction: row;
			border-style: inset;
		}
		
		.contenido {
			width: 30%;
			display: flex;
			flex-direction: column;
		}

		.cuadro {
			background-color: #FFFFFF;
			height: 93%;
			float: left;
		}

		.botones {
			height: 5%;
			display: flex;
			flex-direction: row;
		}

		iframe {
			border: none;
			margin: 0;
			width: 70%;
			height: 100%;
			display: flex;
			background-image: url("img/fondo.jpg");
			background-size: 250px;
		}

	
		img {
			margin-left: 8.5em;
			margin-top: 1em;
			width: 170px;
		}

		h2 {
			font: small-caps 100%/200% serif;
			font-size: 1.3rem;
			text-align: center;
		}

		form {
			margin-left: 6.5em;
			display: flex;
			flex: none;
		}

		input {
			text-align: center;
		}

	</style>
</head>
<body>
	<main>

	<div class="contenedor">
		<div class="contenido">
			<div class="cuadro">

				<h2>Juego de Cartas Españolas</h2>
				<img src="img/tarot.jpg">
				<img src="img/baraja.jpg">

			</div> <!--/cuadro-->
			<div class="botones">
				
				
				<form action="barajaEspanola.php" target="pag" method="POST">
					<button type="submit" name="mostrar">Mostar</button>
					<button type="submit" name="barajar">Barajar</button>
			
					<input type="text" name="cartas" size="3"/><br>
					<button type="submit"> Cartas </button>
				</form> <!--/form-->

			</div> <!--/botones-->
		</div> <!--/contenido-->

		<iframe name="pag"/>

	</div> <!--/contenedor-->

	</main> <!--/main-->

</body>
</html>