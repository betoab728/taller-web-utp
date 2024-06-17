<?php

session_start();
$total=0; 
foreach ($_SESSION['carrito']  as $key => $value) {
    $total+=$value['qt'];
}


?>