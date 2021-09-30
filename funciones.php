<?php


    class CRUD {
        private $servidor = "localhost";
        private $usuario = "root";
        private $contrasena = "";
        private $baseDeDatos = "mydb";


        private function ConectarBD(){
            $conexion = mysqli_connect($this -> servidor, $this -> usuario, $this -> contrasena,
                                        $this -> baseDeDatos)
             or die("ERROR AL CONECTAR CON LA BASE DE DATOS");

            return $conexion;
        }

        private function CerrarConexion($conexion){
            mysqli_close($conexion);
        }

        public function RegistrarUsuario($objeto){
            $conexion = $this -> ConectarBD();
            $consult = "SELECT id FROM iniciosesion";
            $result = $conexion->query($consult);

            $max_registros = 5;


            if(mysqli_num_rows($result) < $max_registros){
                $consulta = "SELECT nombre FROM iniciosesion WHERE nombre='$objeto->nombre'";
                $resultado = $conexion->query($consulta);
                if ($resultado->num_rows > 0) {
                    echo "Usuario ya existente";
                }else{
                    $insertar = "INSERT INTO iniciosesion (nombre, contrasena)
                    VALUES('$objeto->nombre','$objeto->pwd')";
    
                mysqli_query($conexion, $insertar) or die ("Error al registrar usuario");
    
                echo "Registro agregado correctamente";
                }

            }else{
                echo "Numero maximo de registros superado";
            }

            $this -> CerrarConexion($conexion);

        }

        public function IniciarSesion($objeto){
            $conexion = $this -> ConectarBD();
            $consulta = "SELECT nombre FROM iniciosesion WHERE nombre='$objeto->nombre'";
            $resultado = $conexion->query($consulta);

            $_SESSION['logged_in'] = true;                       

            if ($resultado->num_rows > 0) {   
                print "Existe";
                $consulta1 = "SELECT contrasena FROM iniciosesion WHERE contrasena='$objeto->pwd'
                              AND nombre='$objeto->nombre'";
                $resultado1 = $conexion->query($consulta1);
                $consulta2 = "SELECT register FROM iniciosesion WHERE nombre='$objeto->nombre'";
                $resultado2 = $conexion->query($consulta2);
                $resultado2 = mysqli_fetch_array($resultado2);

                
                if ($resultado2['register'] == 1){
                    $_SESSION["primeregistro"] = 1;
                      //zero = false
                      //one = true
                }else{
                    $_SESSION["primeregistro"] = 0; 

                }

                if ($resultado1->num_rows > 0) {
                    echo "<br>";
                    $_SESSION["firstname"] = $objeto->nombre;
                    print "Contraseña y usuarios correctos";
                    header("Location: home.php");
                    die();
                    

                }else{
                    echo "<br>";
                    print "Contraseña incorrecta";
                }



            }else{
                print "No existe";

            }


            /*header("Location: index.php");
            die();*/

            $this -> CerrarConexion($conexion);
        }

        public function MostrarLista($objeto){
            print "Usuarios Registrados";
            $conexion = $this -> ConectarBD();
            $consulta = "SELECT id, nombre FROM iniciosesion";
            $resultado = $conexion->query($consulta);
            $mostrarResultado = '';
            while($a = mysqli_fetch_array($resultado)){
                $mostrarResultado = $mostrarResultado . '<p>' . $a['id'] . ' | ' . $a['nombre'] . '</p>';
            }
            echo $mostrarResultado;
            $this -> CerrarConexion($conexion);
        }


    }
    class Objeto{}


?>