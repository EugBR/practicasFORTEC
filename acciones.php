<?php   
session_start();

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