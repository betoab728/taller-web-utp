<?php
 //datos para la conexion
 $server="localhost";
 $user="root";
 $password="root";
 $database="allqvet";

 $connection=new mysqli( $server, $user,$password ,   $database );

 if ( $connection->connect_error) {
     die("fallo en la conexion ".  $connection->connect_error );
 }

 $consulta="select p.idpedido, p. fecha, c.nombre, c.apellidos, c.telefono,c.correo  from pedido p left join cliente c on p.idcliente=c.idcliente";
 $result= $connection->query($consulta);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/estilos-footer.css"> -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <!-- iconos -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
      <!-- iconos -->
	 <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ICÓNOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- iconos -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

 
  
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<div class="container-fluid p-3" style="background-color:#5f3061;"><h1 class="text-center text-light p-3">Veterinaria Allqovet</h1></div>

<section>
    <div class="container my-5" >
            <h2 class="text-center" >Registro de Pedidos</h2>
            <hr class="mb-4">
           
            <div class="container">
                 
                <form action="" method="post">

                    <div class="row">
                        
                        <div class="col-sm-3">
                           
                           
                        </div>
                    </div>
                   
                </form>

            </div>
            <br>
            <table class="table">

                <thead>
                    <tr>
                       <th>IDPEDIDO</th>
                       <th>FECHA</th>
                       <th>NOMBRE</th>
                       <th>APELLIDO</th>
                       <th>TELEFONO</th>
                       <th>CORREO</th>
                                         
                    </tr>
                </thead>
                <tbody>
                    <?php
                   
                    if (!$result) {
                        die("error en la consulta ".  $connection->connect_error );
                    }                  
                    while ($row = $result -> fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo "$row[idpedido]" ?></td>
                                <td><?php  echo "$row[fecha]";?></td>
                                <td><?php  echo "$row[nombre]";?></td>
                                <td><?php  echo "$row[apellidos]";?></td>
                                <td><?php  echo "$row[telefono]";?></td>
                                <td><?php  echo "$row[correo]";?></td>
                             
                               
                                <td>
                                   
                                </td>
                               
                             </tr>

                        <?php
                        }
                    ?>
                </tbody>
            </table>
    </div>
</section>          
   



</body>

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

</html>