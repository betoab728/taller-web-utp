<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PÁGINA WEB ALLQOVET </title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/73f851add2.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- ICÓNOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- iconos -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<?php
session_start();
//session_destroy();
$total=0; 


if (isset($_SESSION['carrito'])) {

  //  echo '<script language="javascript">alert("si cabece");</script>';
    foreach ($_SESSION['carrito']  as $key => $value) {
        $total+=$value['qt'];
    }
}else {
 //   echo '<script language="javascript">alert("no cabece");</script>';
}


?>
    <!-- MENÚ -->

    <!-- TOPBAR INICIO-->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i
                                class="bi bi-telephone me-2"></i>979444796 / 073 343638</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i
                                class="bi bi-envelope me-2"></i>allqovet@hotmail.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="https://www.facebook.com/profile.php?id=100063494772897">
                            <i class="fab fa-facebook-f"></i>
                        </a>    
                        <a class="text-body px-2" href="">
                           <i class="fab fa-whatsapp"></i>
                        </a>   
                        <a class="text-body px-2" href="">
                          <i class="fa-brands fa-tiktok"></i>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TOPBAR FINAL -->


    <!--NAV BAR O MENÚ-->

    <div class="row">
        <div class="col-md-11">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="img/Logoallqovet.png" alt="Logo" width="100"
                            class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                            <a class="nav-link" href="PAGINACONOCENOS.php">Conócenos</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Servicios
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="PAGINASERVICIOS.php">Clínicos</a></li>
                                    <li><a class="dropdown-item" href="estetica.php">Estética Canina</a></li>
                                    <li><a class="dropdown-item disabled" href="ProductoVista.php">Petshop</a></li>
                                </ul>
                            </li>
                            <a class="nav-link" href="cita.php">Contáctanos</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <a class="icon-cart" href="carrito.php">
                                <div class="counter-container">                              
                                    <?php if (isset($total)) { ?>
                                    <span  id="counter">
                                            <?php echo $total; ?>
                                    </span>
                                    <?php } else{ ?>
                                        <span  id="counter">0</span>
                                    <?php }?>
                                    
                                    <i class="fa-sharp fa-solid fa-cart-shopping" style="font-size: 22px;"></i>
                                </div>
                            </a>           
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <!--FIN NAV BAR O MENÚ-->