<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos = "mydb";
    $fileName = basename($_FILES["image"]["name"]);
    if(isset($_POST["submit"])){
        $revisar = getimagesize($_FILES["image"]["tmp_name"]);
        if($revisar !== false){
            $nombre = $_SESSION["firstname"];
            $image = $_FILES['image']['tmp_name'];
            $imgContenido = addslashes(file_get_contents($image));

            
            
            $conexion = mysqli_connect($servidor, $usuario, $contrasena,$baseDeDatos) or die("ERROR AL CONECTAR CON LA BASE DE DATOS");

            
            //Insertar imagen en la base de datos
            //$insertar = $conexion->query("INSERT into imagenes (nombree, imagenes, creado) VALUES ($name, $imgContenido, now())");

            $insertar = $conexion->query("UPDATE `mydb`.`imagenes` SET creado=now()  WHERE (nombree = '$nombre')");
            if($insertar){
                echo "Fecha Subido Correctamente.";
            }else{
                echo "Ha fallado la Fecha, reintente nuevamente.";
            } 

            echo "<br>";


            $insertar = $conexion->query("INSERT into images (file_name) VALUES ('"$fileName"')");
            if($insertar){
                echo "Archivo Subido Correctamente.";
            }else{
                echo "Ha fallado la Imagen, reintente nuevamente.";
            } 
            // COndicional para verificar la subida del fichero

            // Sie el usuario no selecciona ninguna imagen

    
        /*
            $consult = "UPDATE iniciosesion SET register = '1' WHERE nombre = '$nombre'"; 
            $consulta2 = "SELECT register FROM iniciosesion WHERE nombre='$objeto->nombre'";
        
            $result = $conexion->query($consult);
        
        
        
            $_SESSION["primeregistro"] = 1;
        
            header("Location: home.php");*/
        }else{
            echo "Por favor seleccione imagen a subir.";
        }
    }





?>