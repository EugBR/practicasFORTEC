<?php
session_start();

$_SESSION['logged_in'] = false;  
$_SESSION['primeregistro'] = TRUE;
?>
<html>

<body>

    <head>
        <title>Pagina Eugenio</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h1 class="col-lg-12 login-title">INICIO</h1>

                <div class="col-lg-12 login-form">
                    <form method="post" action="acciones.php">

                        <label class="form-control-label" for="id">  Nombre   
                            <input class="form-control" type="text" name="txtNombre">
                        </label> <br> <br>
                        <label class="form-control-label" for="id">Contraseña
                            <input class="form-control" type="password" name="txtPwd">
                        </label> <br> <br>

                        <label for="accion">
                            <select name="cmbAccion" id="accion" class="btn btn-outline-primary">
                                <option class="opt-btn" value="iniciar">Iniciar Sesion</option>
                                <option class="opt-btn" value="registrar">Registrar</option>
                                <option class="opt-btn" value="lista">Mostrar Lista</option>

                            </select>
                        </label>
                        <?php
                        // $nombre = $_POST["txtNombre"];

                        ?>
                        <br> <br>
                        <input class="btn btn-outline-primary" type="submit" value="NEXT">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>