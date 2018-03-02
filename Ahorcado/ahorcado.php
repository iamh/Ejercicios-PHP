<!DOCTYPE html>
<html>
    <head>        
        <title>Juego Ahorcado</title>
    </head>
    <body bgcolor="#BDBDBD">
        <form action="" method="POST">
            <p align="center">letra: <input type="text" name="letra" maxlength="1"></p>
            <p align="center"><input type="submit" name="verificar" value="Verificar"></p>
        </form>
    </body>
</html>
<?php

    require 'funciones.php';
   
    session_start();
    if (isset($_POST['enviar'])) {
        $_SESSION['palabra'] = trim($_POST['palabra']); // palabra a adivinar
        $_SESSION['ahorcado'] = str_split($_SESSION['palabra']); // creamos un array con la palabra
        $_SESSION['longitud'] = count($_SESSION['ahorcado']); // tamaño del array
        $_SESSION['fallos'] = 0; // contador de fallos

        palabraVacio($_SESSION['palabra']);
        palabraPermitida($_SESSION['palabra']);

        // creamos y mostrados array vacio.
        echo '<p align="center">';
        for ($i = 0; $i < $_SESSION['longitud']; $i++) {
            $_SESSION['vacio'][$i] = '_';
            echo $_SESSION['vacio'][$i] ."\n";
        }
        echo '</p>';
    }

    if (isset($_POST['verificar'])) {
        $_SESSION['letra'] = $_POST['letra']; // letra a buscar
        $_SESSION['ingresadas'] = array();

        if (letraVacio($_SESSION['letra']) == false) {

            //comprobamos si en el array de letra existe y agregamos en el array vacio.
            for ($i = 0; $i < $_SESSION['longitud']; $i++) { 
                if ($_SESSION['ahorcado'][$i] == $_SESSION['letra']) {
                    $_SESSION['vacio'][$i] = $_SESSION['letra'];
                }   
            }
            // comprobar si 2 arrays son iguales. 
            if (!array_diff($_SESSION['ahorcado'], $_SESSION['vacio'])) {
                echo '<p align="center"> <img src="imagenes/'. $_SESSION['fallos'] .'.png"> </p> <br>';
                echo '<p align="center"> La palabra es: '. $_SESSION["palabra"]. '</p>';
                ganar();
                jugarNuevamente();
            }
            // comprobar si la letra ingresada no existe en el array y sumamos contador de fallos, si el contador fallos supera ellimite permitido de errores.
            if (!in_array($_SESSION['letra'], $_SESSION['ahorcado'])) {
                $_SESSION['fallos']++;
                if ($_SESSION['fallos'] == 9) {
                    echo '<p align="center"> <img src="imagenes/9.png"> </p> <br>';
                    echo '<p align="center"> La palabra era: '. $_SESSION["palabra"]. '</p>';
                    perder();
                    jugarNuevamente();
                }
            }
        }
        // mostrados array vacio con letras que se van rellenando.
        echo '<p align="center">';
            for ($i = 0; $i < $_SESSION['longitud']; $i++) { 
                echo $_SESSION['vacio'][$i] ."\n";
            }
        echo '</p>';

     }
    imagen($_SESSION['fallos']); // funcion de la imagen
         
?>