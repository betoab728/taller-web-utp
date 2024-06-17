<?php

if (isset(($_POST["deletedata"]))) {

    include('conexion.php');
$idRegistro = $id=$_POST["id"];;

$DeleteRegistro = ("DELETE FROM pedido WHERE idpedido= '".$idRegistro."' ");
mysqli_query($mysqli, $DeleteRegistro);

header("Location: carrito.php");

}


?>