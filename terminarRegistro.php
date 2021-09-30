<?php
    session_start();

    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos = "mydb";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena,
    $baseDeDatos)
or die("ERROR AL CONECTAR CON LA BASE DE DATOS");

    

    $nombre = $_SESSION["firstname"];

    $consult = "UPDATE iniciosesion SET register = '1' WHERE nombre = '$nombre'"; 
     $consulta2 = "SELECT register FROM iniciosesion WHERE nombre='$objeto->nombre'";

    $result = $conexion->query($consult);



    $_SESSION["primeregistro"] = 1;

    header("Location: home.php");



?>