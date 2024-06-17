<?php

 //datos para la conexion
 $hostname="localhost";
 $username="root";
 $password="root";
 $database="allqvet";

 $mysqli= mysqli_connect($hostname,$username,$password,$database) or die (mysqli_connect_error() );


?>