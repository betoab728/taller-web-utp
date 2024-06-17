
<?php
    include('conexion.php');
    include('cabecera.php');
 
            if(isset($_GET['action']) == "add")
            {
                $total=0; 
                $id= $_GET['id']; 

                if (isset($_SESSION['carrito'][$id] )) {
                 
                    $previo = $_SESSION['carrito'][$id]['qt'];

                    $_SESSION['carrito'][$id]=array("pid"=> $id,"qt"=>  $_POST['quantity']+  $previo,"precio"=>$_POST['hidden_price']);
                }else {
                    $_SESSION['carrito'][$id]=array("pid"=> $id,"qt"=> $_POST['quantity'] ,"precio"=> $_POST['hidden_price'] );

                   

                    foreach ($_SESSION['carrito']  as $key => $value) {
                        $total+=$value['qt'];
                    }
    
                }

                
                 echo "<pre>";
                 print_r($_SESSION['carrito']);
                 echo "</pre>";

                 echo "total: ". $total;

            //    foreach ($_SESSION['carrito'] as $key => $value) {
            //       //  print_r($value['precio']);
            //       $sql="insert into pedido (idproducto,cantidad,precio) values ('".$value['pid']."','".$value['qt']."','".$value['precio']."')";
            //       $result = mysqli_query($mysqli,$sql);
            //    }


              
/* 
                $id=$_GET["id"];
                $cantidad=	$_POST["quantity"];
                $precio= $_POST["hidden_price"];

                $sql="insert into pedido (idproducto,cantidad,precio) values ('$id','$cantidad','$precio')";
                $result = mysqli_query($mysqli,$sql);


                //totalizar los productos utilizando sesion para almacenar el total
              
                $sql_total="SELECT sum(cantidad) as cantidad_total from pedido";
                $result2 = mysqli_query($mysqli,$sql_total);

                while($row = mysqli_fetch_array($result2)){
                    $total=$row["cantidad_total"];
                }  */   
            }

?>

<?php

?>
  <section>
    <div class="container">

     <h1 class="text-center mt-5">NUESTROS PRODUCTOS DISPONIBLES</h1>
        <hr class="mb-5">
    </div>
  </section>
  <section>
  <br />
		<div class="container">
			
            <div class="row align-items-center">

                    <?php
                        $query = "SELECT * FROM productos";
                        $result = mysqli_query($mysqli, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_array($result))
                                    {
                            ?>
                            <div class="col-md-3 mt-2">
                                <form method="post" action="ProductoVista.php?action=add&id=<?php echo $row["idproducto"]; ?>">
                                    <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded cards "  style="max-width: 350px;" >
                                        <img class="img-fluid" src="img/<?php echo $row["imagen"]; ?>" class="img-responsive" /><br />

                                        <h4 class="text-info"><?php echo $row["descripcion"]; ?></h4>

                                        <h4 class="text-danger">S/. <?php echo $row["precio"]; ?></h4>

                                        <input type="number" min="1" name="quantity" value="1" class="form-control" />

                                        <input type="hidden" name="hidden_name" value="<?php echo $row["descripcion"]; ?>" />

                                        <input type="hidden" name="hidden_price" value="<?php echo $row["precio"]; ?>" />

                                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Agregar" />

                                    </div>
                                </form>
                            </div>
                            <?php
                            }
                        }
                    ?>

            </div>
	<br />
  </section>
  <?php include_once("piepagina.php"); ?>                     
  <br>
</body>
</html>