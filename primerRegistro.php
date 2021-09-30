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
    <form name="MiForm" id="MiForm" method="post" action="terminarRegistro.php" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-sm-2 control-label">Imagen de Perfil</label>
         
          <div class="col-sm-8">
            <input type="file" class="form-control" id="image" name="image" multiple>
          </div>
          
          <br>


          <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
      </form>
    </body>

</html>
<!--$servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos = "mydb";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena,$baseDeDatos) or die("ERROR AL CONECTAR CON LA BASE DE DATOS");

    
    $nombre = $_SESSION["firstname"];

    $consult = "UPDATE iniciosesion SET register = '1' WHERE nombre = '$nombre'"; 
     $consulta2 = "SELECT register FROM iniciosesion WHERE nombre='$objeto->nombre'";

    $result = $conexion->query($consult);-->




