<?php   
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include_once("funciones.php");
    //require
    $objeto = new Objeto;
    $crud = new CRUD;

    $nombre = $_POST["txtNombre"];
    $pwd = $_POST["txtPwd"];
    $accion = $_POST["cmbAccion"];

    $objeto -> nombre = $nombre;
    $objeto -> pwd = $pwd;



    if ($accion == "registrar") {

        $crud -> RegistrarUsuario($objeto);

    }elseif($accion == "iniciar"){
        $crud -> IniciarSesion($objeto);

    }elseif($accion == "lista"){
        $crud -> MostrarLista($objeto);

    }
    


?>