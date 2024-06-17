<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('conexion.php');


$contador=0;
$consulta="SELECT * FROM cliente where nombre='$usuario'";
$resultado=mysqli_query($mysqli,$consulta);

$filas=mysqli_num_rows($resultado);
$idcliente=0;
if($filas){

  while ($row = $resultado -> fetch_assoc()) {

    if (password_verify($contraseña, $row['password'])) {
        $idcliente=$row['idcliente'];
      $contador++;
    }

  }

  if ($contador > 0) {

    header("location: confirmapedido.php?idcliente=". $idcliente);

  } else {
   
    ?>
    <h1 class="bad">CONTRASEÑA INCORRECTA</h1>
    <?php
    include("LoginCliente.php");

  ?>
  <?php

  }
  
} 
else{
    ?>
    <h1 class="bad">USUARIO NO ENCONTRADO</h1>
    <?php
    include("LoginCliente.php");

  ?>
  <?php
}
