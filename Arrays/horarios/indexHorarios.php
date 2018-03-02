<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Horarios</title>
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
			width: 60%;
			height: 570px;
			display: flex;
			flex-direction: row;
	        border: 4px solid cadetblue;
            border-radius: 8px;
            background-color: #FAFAFA;
		}
		
		.cuadro {
			text-align: center;
			width: 50%;
		}

		.enlaces {
			width: 60%;
			margin: auto;
			margin-top: 2em;
		}

		.estilo {
			background-color: #F8ECE0;
            border: 4px solid cadetblue;
            border-radius: 8px;
		}

		iframe {
			border: none;
			margin: 0;
			margin-top: 1.5em;
			width: 50%;
			height: 90%;
			display: flex;
		}

		h2 {
			width: 80%;
            margin: auto;
            margin-top: 1em;
			font: small-caps 100%/200% serif;
			font-size: 1.3rem;
			margin-bottom: 7em;
		}

	</style>

</head>
<body>
	<main>

	<div class="contenedor">
		<div class="cuadro">
			<h2 class="estilo">Horarios de clases Maria de Zayas</h2>

			<div class="enlaces estilo">
				<a href="horarios.php?superior" target="pag"> <p> CICLOS FORMATIVOS DE GRADO SUPERIOR </p> </a>
			</div>
			<div class="enlaces estilo">
				<a href="horarios.php?medio" target="pag"> <p> CICLOS FORMATIVOS DE GRADO MEDIO </p> </a>
			</div>
			<div class="enlaces estilo">
				<a href="horarios.php?basica" target="pag"> <p> FORMACIÓN PROFESIONAL BÁSICA </p> </a>
			</div>
		</div>

		<iframe name="pag"/>

	</div> <!--/contenedor-->

	</main> <!--/main-->

</body>
</html>