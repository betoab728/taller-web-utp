<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');


$contador=0;
$consulta="SELECT * FROM usuario where nombre='$usuario'";
$resultado=mysqli_query($mysqli,$consulta);

$filas=mysqli_num_rows($resultado);



if($filas){

  while ($row = $resultado -> fetch_assoc()) {

    if (password_verify($contraseña, $row['password'])) {
    
      $contador++;
    }

  }

  if ($contador > 0) {
    header("location:menu.html");
  } else {
   
    ?>
    <h1 class="bad">CONTRASEÑA INCORRECTA</h1>
    <?php
    include("index.html");

  ?>
  <?php

  }
   // 
  
} 
else{
    ?>
    <h1 class="bad">USUARIO NO ENCONTRADO</h1>
    <?php
    include("index.html");

  ?>
  <?php
}
