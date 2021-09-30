<?php
session_start();


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_SESSION['logged_in'] == false){
  //redirigir a index
  header("Location: index.php");
  die();
  session_destroy();
}elseif($_SESSION["primeregistro"] == 0){
  header("Location: primerRegistro.php");

}


?>
<html>


<head>
  <title>Pagina Eugenio</title>
  <link rel="stylesheet" type="text/css" href="style2.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
  <div class="topnav">
    <a class="active" href="home.php">Menu</a>
    <a class="" href="perfil.php">Perfil</a>
    <a class="" href="config.php">Configuracion</a>

    <a style="float: right; padding-right: 1em;" href="terminarSesion.php"><img src="power.png" width="20"
        height="20"></a>
  </div>

  <div style="padding-left:16px">
    <h2>Bienvenido</h2>

    <?php
    // Starting session
    $nombre = $_SESSION["firstname"];
    echo 'Hola, ' . $nombre;

  ?>
    <div class="main">
      <h1>Mostrando imagen almacenada en MySQL</h1>
      <div class="panel panel-primary">
        <div class="panel-body">
          <img src='vista.php?id=4' alt='Img blob desde MySQL' width="600" />
        </div>
      </div>
    </div>

    <p></p>
  </div>
</body>

</html>