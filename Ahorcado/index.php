<!DOCTYPE html>
<html>
    <head>        
        <title>Juego Ahorcado</title>
    </head>
    <body bgcolor="#BDBDBD">
        <form action="ahorcado.php" method="POST">
            <br><br>
            <?php
            require_once "autoload.php";
            $cabecera = new Cabecera("Ahorcado");
            echo $cabecera;
            ?>
            
            <p align="center"><img src="imagenes/9.png"></p>
            <br>
            <p align="center"> Ingresa una palabra: <input type="password" name="palabra"></p>
            
            <p align="center"><input type="submit" name="enviar"value="Comenzar"></p>
        </form>
    </body>
</html>
