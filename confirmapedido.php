<?php



    include('conexion.php');


   // $jqueryMisProducts   = mysqli_query($con, $SqlMisProducts); 
   /*  $resultPedido = mysqli_query($mysqli,$sql_productos);
    $ListaProductos = mysqli_num_rows($resultPedido); 
     $sql_total="SELECT sum(cantidad) as cantidad_total from pedido";
                $result2 = mysqli_query($mysqli,$sql_total);

                while($row = mysqli_fetch_array($result2)){
                    $total=$row["cantidad_total"];
                }    

                if(isset($_POST["confirmado"]))
                {
                  
                    $sql="delete from pedido";
                    $result = mysqli_query($mysqli,$sql);

                    header("location: ProductoVista.php");
                }
             */
?>

<?php
include('cabecera.php');
?>

	<!--Lista de pedido --->
	<div class="container mb-4">
        <div class="row">
                <div class="col-12">
                    <h3 class="text-center mb-5" style="border-bottom: solid 1px #ebebeb;">
                        Resumen de su pedido 
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead id="theadTableSpecial">
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Producto</th>
                                    <th scope="col" class="text-left">Cantidad</th>
                                    <th scope="col" class="text-right">Precio</th>
                                    <!--<th class="text-center" scope="col">SubTotal</th> -->
                                    <th class="text-right">Acción </th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        //$sql_productos="select *  from productos";
                        $importe=0.0;
                        foreach ($_SESSION['carrito']  as $key => $value) {
                        
                            $sql_productos="select * from productos where idproducto = $key";
                            $resultPedido = mysqli_query($mysqli,$sql_productos);
                            $ListaProductos = mysqli_num_rows($resultPedido); 


                            while ($Listado = mysqli_fetch_array($resultPedido)) { ?>

                                 
                                <tr id="resp<?php echo $Listado['idproducto']; ?>">
                                    <td>
                                        <img src="img/<?php echo $Listado["imagen"]; ?>" alt="Foto_Producto" style="width: 100px;"> 
                                    </td>
                                    <td>
                                        <?php echo $Listado["descripcion"]; ?>
                                    </td>
                                    <td>
                                        <div class="quantity_selector">
                                            
                                            <span id="display<?php echo $Listado['idproducto']; ?>" quantity_value>
                                            <?php echo $value['qt']; ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-right"> <strong>S/.</strong> <?php echo $Listado["precio"]; ?> </td>
                                    <td class="text-right">
                                        <span class="btn btn-sm btn-danger deletebtn" id="<?php echo $Listado['idproducto']; ?>">
                                            <i class="fa fa-trash"></i> 
                                        </span> 
                                    </td>
                                </tr>
                                <?php
                                       $importe=$importe+ ($value['qt'] * $value['precio'])
                                ?>

                        <!--Modal para eliminar --->
                        <div class="modal fade" id="deletemodal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Carrito de compra</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="eliminarItem.php" method="POST">
                                    <input type="text" name="id" value="<?php echo $Listado['idpedido']; ?>" hidden>
                                
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title text-center">Eliminar Producto</h4>
                                    </div>
                                    <div class="modal-body text-center" style="border-bottom:1px solid #e9ecef;">
                                        <label style="color: #333; font-weight:600;">
                                            ¿Estás seguro de eliminar el Producto?
                                        </label>
                                    </div>
                                    <div class="modal-body text-center">
                                        <button type="submit" class="btn btn-primary" name="deletedata" style="color:#fff; padding: 0px 50px; border-radius: 20px; margin: 0px 30px;"  data-dismiss="modal">Sí</button>
                                        <!-- <a class="btn btn-danger btn-salir" style="color:#fff; padding: 0px 50px; border-radius: 20px;" data-dismiss="modal">No</a> -->
                                        <button type="button" class="btn btn-danger" style="color:#fff; padding: 0px 50px; border-radius: 20px;" data-bs-dismiss="modal">No</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- fin de la Modal -->
                    <?php } 

                    
                        }

                    
                        //             /****Total a Pagar productos*******/
                        //  $SqlImporte = "select sum(cantidad * precio) as importe from pedido";
                        //  $resultImporte   = mysqli_query($mysqli, $SqlImporte); 
                        //  $RegistroImporte     = mysqli_fetch_array($resultImporte); 
                    ?>
                            <tr style="background-color: #fff !important;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center" style="color:#fff; background-color: #5f3061;">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="text-right" style="background-color: #5f3061; color:#fff;">
                                        <strong id="totalPuntos">
                                        S/.<?php echo $importe; ?>
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 mb-2 mt-5">
                    <div class="row">
                        <div class="col-6">
                            <a href="ProductoVista.php" class="btn-pedido">Cancelar</a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-5 bg-light d-grid gap-4 ">
                            <!-- <a href="#" class="btn btn-success btn_confirmacion">Confirmar Pedido</a> -->
                            <!-- <button class="btn btn-success btn_confirmacion" type="submit" name="registrar">Confirmar Pedido</button>  -->
                           <form action="#" method="POST">
                                <input class="btn btn-success btn_confirmacion"  style="width: 300px;" type="submit" value="Confirmar Pedido" name="registrar"> 
                           </form>
                           
                        </div>
                    </div>
                </div> 


        </div>
    </div>
    
    <!-- para que aparezca el modal -->
    <script>
    $(document).ready(function() {
        $('.deletebtn').on('click',function(){

        $('#deletemodal').modal('show');
        $tr=$(this).closest('tr');
        var data=$tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#id').val(data[0]);
        
        });

        $('.btn_confirmacion').on('click',function(){
        $('#modalr-confir').modal('show');  
      
});

    });
    </script>  

</body>
</html>
<?php

 $idcliente= $_GET['idcliente'];

 if(isset ($_POST['registrar'])){

   
    foreach ($_SESSION['carrito'] as $key => $value) {

        $sql="insert into pedido (idproducto,cantidad,precio, idcliente) values ('".$value['pid']."','".$value['qt']."','".$value['precio']."','$idcliente')";
        $result = mysqli_query($mysqli,$sql);
     }
     session_destroy();
     echo '<script language="javascript">alert("SU PEDIDO HA SIDO REGISTRADO CORRECTAMENTE");</script>';
    
   
    
 }

?>