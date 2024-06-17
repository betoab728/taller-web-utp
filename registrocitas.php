<?php
include('cabecera.php');
?>
<br>
<div class="container mt-15">
   
    <h1 class="text-center mt-15">REGISTRO DE CITAS</h1>

    <hr>

</div>


<div id="main-container" >
    <table >
        <tr>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            <th>MENSAJE</th>
            <th>FECHA</th>
        </tr>

        <?php

            //datos para la conexion
            include('conexion.php');
            
            $consulta="select nombre,correo,mensaje,telefono,fecha from citas";
            $ejecutarConsulta=mysqli_query( $mysqli,  $consulta);

            $filas=mysqli_num_rows($ejecutarConsulta);
            $fila=mysqli_fetch_array($ejecutarConsulta);

             if (! $ejecutarConsulta) {
                echo "<script> alert('error  en la consulta')   </script>";
             }else{
                if ( $filas<1) {
                    
                    echo "<tr><td>NO hay registros </td></tr>";


                }
                    for ($i=0; $i <=$fila ; $i++) { 
                        echo '
                            <tr>
                                <td>'.$fila[0].'</td>
                                <td>'.$fila[1].'</td>
                                <td>'.$fila[2].'</td>
                                <td>'.$fila[3].'</td>
                                <td>'.$fila[4].'</td>
                              
                            </tr>
                        ';
                        $fila=mysqli_fetch_array( $ejecutarConsulta);
                    }

             }
        ?>

    </table>



</div>


<!--FOOTER INICIO -->
<div class="container-fluid bg-dark  btn-lg-square text-light mt-5 py-5">
        <div class="container py-5x"  >
            <div class="row g-5 ">
                <div class="col-lg-4 col-md-6">
                    <h4 id="conocenos" class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">VISÍTANOS</h4>
                    <p id="color" class="mb-2"><i class="fa fa-map-marker-alt  me-3"></i>Av. Jorge Chávez Mz. L1 Lote 16 A. Ex canal Balarezo. Castilla - Piura. </p>
                    <p id="color" class="mb-2"><i class="fa fa-envelope  me-3"></i>allqovet@hotmail.com</p>
                    <p id="color" class="mb-0"><i class="fa fa-phone-alt me-3"></i>979444796 / 073 343638</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 id="conocenos" class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">ENLACES RÁPIDOS</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Inicio</a>
                        <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Conócenos</a>
                        <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Servicios</a>
                        <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Contáctanos</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 id="conocenos" class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">CORRESPONDENCIA</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Ingresa tu correo">
                            <button id="color" class="btn">Enviar</button>
                        </div>
                    </form>
                    <h6 id="conocenos" class="text-uppercase mt-4 mb-3">Síguenos</h6>
                    <div class="d-flex">
                        <a id="color" class="btn btn-lg btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a id="color"class="btn btn-lg btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER FINAL -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/slider.js"></script>

</body>
</body>
</html>