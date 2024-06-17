
<?php
include('conexion.php');
    session_start();
           
        if (isset($_POST['agregar'])) {
            if (isset($_SESSION['cart'])) {
                # code...
            }else {
              $array=array(

                    'idproducto'=>$_GET['idproducto'],
                    'nombre'=>$_GET['nombre'],
                    'precio'=>$_GET['precio'],
                    'cantidad'=>$_GET['cantidad'],

              );

              $_SESSION['cart'][]= $array;

            }
        }
?>



<?php
include('cabecera.php');
?>
  <section>
    <div class="container">

     <h1 class="text-center mt-5">NUESTROS PRODUCTOS DISPONIBLES</h1>
        <hr class="mb-5">
    </div>
  </section>
  <section>
   
        <div class="container-fluid">
                <div class="col-mdd-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-center">Productos</h2>

                            <div class="col-md-12">

                                <div class="row">

                            
                            <?php
                                $consulta="select * from productos";
                                $result=mysqli_query( $mysqli,$consulta);

                                while ($fila=mysqli_fetch_array( $result)) { ?>
                                    <div class="col-md-4">

                                    
                                        <form  method="post" action="ProductoVista.php?id=<?=$fila['idproducto'] ?>">
                                            <img class="shadow" src="img/<?= $fila['imagen'] ?>" style="max-width: 440px;">
                                            <h5 class="text-center">  <?=$fila['descripcion'];?> </h5>
                                            <h5 class="text-center"> S/.<?=number_format($fila['precio'],2) ;?> </h5>
                                            <input type="hidden" name="nombre" value=" <?= $row['descripcion'] ?>">
                                            <input type="hidden" name="precio" value=" <?= $row['precio'] ?>">
                                            <input type="number" name="cantidad" value="1" class="form-control">
                                           <input type="submit" name="agregar" class="btn btn-warning btn-block my-2" value="Agregar">
                                        </form>
                                    </div>
                                <?php }

                                ?>
                            
                            </div>
                        </div>

                        </div>
                        <div class="col-md-6">
                            <h2 class="text-center">SU PEDIDO</h2>
                             <?php
                                var_dump($_SESSION['cart']);

                             ?>
                        </div>

                    </div>

                </div>
        </div>
  </section>
</body>
</html>