

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>

        ul {
            background-color: #F8ECE0;
            border: 4px solid cadetblue;
            border-radius: 8px;
            width: 85%;
        }

        a {
            text-decoration: none;
            font-family: 'Trebuchet MS';
            color: slategray;
            font-size: 1rem;
        }
       
    </style>
    <title>Horarios</title>
</head>
<body>

    <?php

        if (isset($_GET["superior"])) makeSchedules('superior');

        if (isset($_GET["medio"])) makeSchedules('medio');

        if (isset($_GET["basica"])) makeSchedules('basica');

        
        function makeSchedules($var) {
            $directory = "cursos/$var";
            $files = scandir($directory);
            array_splice($files, 0, 2);
            $files = preg_replace('/\\.[^.\\s]{3,4}$/', '', $files);
            
            echo "<ul>";
            printLista($files, $directory);
            echo "</ul>";
        }

        function printLista($files, $directory){
            foreach($files as $horario){
                $href = $directory . "/" . $horario . ".png";
                echo "<li> <a href='" . $href ."'>" . $horario . "</a></li>"; 
            }
        }
    ?>
    
</body>
</html>





