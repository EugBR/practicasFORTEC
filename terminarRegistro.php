<?php
    session_start();
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos = "mydb";

    if(isset($_POST["submit"])){
        $revisar = getimagesize($_FILES["image"]["tmp_name"]);
        if($revisar !== false){
            $image = $_FILES['image']['tmp_name'];
            $imgContenido = addslashes(file_get_contents($image));
            
            $date = $_POST['date'];
            
            $conexion = mysqli_connect($servidor, $usuario, $contrasena,$baseDeDatos) or die("ERROR AL CONECTAR CON LA BASE DE DATOS");

            
            
            //Insertar imagen en la base de datos
            $insertar = $conexion->query("INSERT into iniciosesion (imagenes, nacimiento) VALUES ('$imgContenido', now())");
            // COndicional para verificar la subida del fichero
            if($insertar){
                echo "Archivo Subido Correctamente.";
            }else{
                echo "Ha fallado la subida, reintente nuevamente.";
            } 
            // Sie el usuario no selecciona ninguna imagen

    
            /*$nombre = $_SESSION["firstname"];
        
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