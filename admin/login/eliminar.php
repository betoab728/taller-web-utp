<?php

if (isset($_POST["deletedata"])) {
    
   // $id=$_GET["idusuarios"];
    $id=$_POST["delete_id"];

    //datos para la conexion
    $server="localhost";
    $user="root";
    $password="root";
    $database="allqvet";
    $connection=new mysqli( $server, $user,$password ,   $database );

    $sql ="delete from productos where idproducto='$id'";
    $connection->query($sql);
}

header("location: productos.php");

?>