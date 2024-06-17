<?php

    $nombre="";
    $contraseña="";
    $confirma_contraseña="";
    $mensajeError="";    
    $mensaje="";

if(isset ($_POST['registro'])){

     //datos para la conexion
     $server="localhost";
     $user="root";
     $password="root";
     $database="allqvet";

     $connection=new mysqli( $server, $user,$password ,   $database );

    $nombre=$_POST['nombre'];
    $contraseña=$_POST['contraseña'];
    $confirma_contraseña=$_POST['confirma_contraseña'];
    
    do {
        if ( empty($nombre) ||  empty($contraseña) || empty( $confirma_contraseña) ) {
           $mensajeError="Llene todos los campos";
           break;
        }

        if ( $contraseña != $confirma_contraseña) {
            $mensajeError="Las contraseñas no coinciden";
           break;
        }

        //ENCRIPTACION DE CONTRASEÑAS
        $pass_encriptada=password_hash( $contraseña,PASSWORD_DEFAULT,['cost' => 5] );

        $sql="insert into usuario (nombre,password) values ('$nombre','$pass_encriptada')";
        $result=$connection->query($sql);

        if (!$result) {
            $mensajeError="Error en la consulta".$connnection->error;
            break;
        }

        $nombre="";
        $contraseña="";
        $mensaje="Usuario Registrado correctamente";
        header("location: usuarios.php");
        exit;        
    } while (false);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="fondo">
<section>
<div class="container-fluid p-3" style="background-color:#5f3061;"><h1 class="text-center text-light p-3">Veterinaria Allqovet</h1></div>
    <div class="container my-5">


            <?php
                if (!empty($mensajeError)) {
                 echo "                    
                 <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                 <strong>$mensajeError</strong>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>   
                ";
                }

            ?>
            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <form action="#" method="post">
                        <div class="row mb-3">
                            
                            <div class="col">
                            <h2 class="text-center text-light p-3 " style="background-color:#5f3061;">Nuevo Usuario</h2>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="">Nombre</label>
                            <div class="col">
                                <input type="text" class="form-control" name="nombre" value="">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="">Contraseña</label>
                            <div class="col">
                            <input type="password" name="contraseña"class="form-control form-control-lg" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="">Confirmar Contraseña</label>
                            <div class="col">
                            <input type="password" name="confirma_contraseña"class="form-control form-control-lg" />
                            </div>
                        </div>
                       

                            <?php
                                if (!empty($mensaje) ) {
                                    
                                    echo "
                                    <div class='row mb-3'>
                                        <div class='col-sm-6'>
                                            <div class='alert alert-success alert-dismissible fade show' role='alert'>    
                                                <strong>$mensaje</strong>
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                            </div>
                                        </div>
                                    </div>";

                                }
                            ?>
                        

                        <div class="row mb-3 justify-content-center">
                            <div class="col-sm-6 d-grid">
                                <input class="btn btn-primary" type="submit" value="Guardar" name="registro"> 
                            </div>
                            <div class="col-sm-6 d-grid">
                                <a class="btn btn-primary" href="usuarios.php">Cancelar</a>
                            </div>
                        </div>

                    </form>

                </div>
                    
            </div>

       
    </div>
</section>
<!--FOOTER INICIO -->
  <div class="container-fluid btn-lg-square text-light mt-5 py-5" style="background-color:#5f3061;">
        <div class="container py-5x">
            <div class="row g-5 ">
                <div class="col-lg-4 col-md-6">
                    <h4 id="conocenos"
                        class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">VISÍTANOS
                    </h4>
                    <p id="color" class="mb-2"><i class="fa fa-map-marker-alt  me-3"></i>Av. Jorge Chávez Mz. L1 Lote 16
                        A. Ex canal Balarezo. Castilla - Piura. </p>
                    <p id="color" class="mb-2"><i class="fa fa-envelope  me-3"></i>allqovet@hotmail.com</p>
                    <p id="color" class="mb-0"><i class="fa fa-phone-alt me-3"></i>979444796 / 073 343638</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 id="conocenos"
                        class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">ENLACES
                        RÁPIDOS</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a id="color" style="text-decoration:none; color:white;"  class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Inicio</a>
                        <a id="color" style="text-decoration:none; color:white;" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Conócenos</a>
                        <a id="color" style="text-decoration:none; color:white;" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Servicios</a>
                        <a id="color" style="text-decoration:none; color:white;" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Contáctanos</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 id="conocenos"
                        class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">
                        CORRESPONDENCIA</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Ingresa tu correo">
                            <button id="color" class="btn">Enviar</button>
                        </div>
                    </form>
                    <h6 id="conocenos" class="text-uppercase mt-4 mb-3">Síguenos</h6>
                    <div class="d-flex">
                        <a id="color" class="btn btn-lg btn-lg-square rounded-circle me-2" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a id="color" class="btn btn-lg btn-lg-square rounded-circle" href="#"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER FINAL -->

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>