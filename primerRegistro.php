<?php
session_start();
//$_SESSION["primeregistro"] = false;
?>

<html>

<body>

    <head>
        <title>Pagina Eugenio</title>
    </head>

    <body>

    <p>Unos ultimos ajustes...</p>
        <form method="post" action="terminarRegistro.php">

            <label class="form-control-label" for="id"> Imagen de perfil
                <input class="form-control" type="file" name="imgPerfil">
            </label> <br> <br>
            <label class="form-control-label" for="id"> Fecha de nacimiento
                <input class="form-control" type="date" name="date">
            </label> <br> <br>

            <?php
            // $nombre = $_POST["txtNombre"];

            ?>
            <br> <br>
            <input class="btn btn-outline-primary" type="submit" value="TERMINAR REGISTRO">
        </form>
    </body>

</html>





