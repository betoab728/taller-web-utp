<?php

if (isset($_POST['array'])){

	$num=$_POST['txtbuscar'];

    for ($i=0; $i < $longitud ; $i++) { 

        if ($num==$numeros[$i]) {

            $indice=$i;
          break;
        }
    }

    if ($indice !=0) {
        echo '<script>alert("el numero encontrado esta en la posicion: '.$indice.'");</script>';
    }else {
        echo '<script>alert("el numero no se encuentra en el arreglo");</script>';
    }
    
}


?>

<?php
include('cabecera.php');
?>
    
  <!-- Products Start -->
  <div class="container-fluid py-5">
        <div class="owl-carousel product-carousel">
            <div class="pb-5">
                <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                    <h6 class="text-uppercase">Ricocan adulto</h6>
                    <h5 class="text fs-5" id="conocenos">S/ 40.00</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn botonproducto" href=""><i class="bi bi-cart text-light"></i></a>
                        <a class="btn botonproducto" href=""><i class="bi bi-eye text-light"></i></a>
                    </div>
                </div>
            </div>
            <div class="pb-5">
                <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                    <h6 class="text-uppercase">Canbo cachorro</h6>
                    <h5 class="text fs-5" id="conocenos">S/ 45.00</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn botonproducto" href=""><i class="bi bi-cart text-light"></i></a>
                        <a class="btn botonproducto" href=""><i class="bi bi-eye text-light"></i></a>
                    </div>
                </div>
            </div>
            <div class="pb-5">
                <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="img/product-3.png" alt="">
                    <h6 class="text-uppercase">Canbo adulto</h6>
                    <h5 class="text fs-5" id="conocenos">S/ 50.00</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn botonproducto" href=""><i class="bi bi-cart text-light"></i></a>
                        <a class="btn botonproducto" href=""><i class="bi bi-eye text-light"></i></a>
                    </div>
                </div>
            </div>
            <div class="pb-5">
                <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="img/product-4.png" alt="">
                    <h6 class="text-uppercase">RicoCat adulto</h6>
                    <h5 class="text fs-5" id="conocenos">S/ 38.00</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn botonproducto" href=""><i class="bi bi-cart text-light"></i></a>
                        <a class="btn botonproducto" href=""><i class="bi bi-eye text-light"></i></a>
                    </div>
                </div>
            </div>
            <div class="pb-5">
                <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                    <h6 class="text-uppercase">Ricocan cachorro</h6>
                    <h5 class="text fs-5" id="conocenos">S/ 45.000</h5>
                    <div class="btn-action d-flex justify-content-center">

                        <a class="btn botonproducto" href=""><i class="bi bi-cart text-light"></i></a>
                         <a class="btn botonproducto" href=""><i class="bi bi-eye text-light"></i></a> -->
                        <!-- <input type="submit" class="btn botonproducto bi bi-eye text-light" value="ver" name="verproducto"> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form action="ProductoVista.php" method="post">
                <input type="submit" class="btn botonproducto bi bi-eye text-light" value="VER LISTA" name="verproducto">
            </form>
                
        </div>
        

    </div>
</div>
<!-- Products End -->


<!--FOOTER INICIO -->
<div class="container-fluid bg-dark  btn-lg-square text-light mt-5 py-5">
    <div class="container py-5x"  >
        <div class="row g-5 ">
            <div class="col-lg-4 col-md-6">
                <h4 id="conocenos" class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">VISÍTANOS</h4>
                <p id="color" class="mb-2"><i class="fa fa-map-marker-alt  me-3"></i>Av. Jorge Chávez Mz. L1 Lote 16 A. Ex canal Balarezo. Castilla - Piura. </p>
                <p id="color" class="mb-2"><i class="fa fa-envelope  me-3"></i>allqovet@hotmail.com</p>
                <p id="color" class="mb-0"><i class="fa fa-phone-alt me-3"></i>979444796 / 073 343638</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 id="conocenos" class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">ENLACES RÁPIDOS</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Inicio</a>
                    <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Conócenos</a>
                    <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Servicios</a>
                    <a id="color" class="mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Contáctanos</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 id="conocenos" class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4">CORRESPONDENCIA</h4>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Ingresa tu correo">
                        <button id="color" class="btn">Enviar</button>
                    </div>
                </form>
                <h6 id="conocenos" class="text-uppercase mt-4 mb-3">Síguenos</h6>
                <div class="d-flex">
                    <a id="color" class="btn btn-lg btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a id="color"class="btn btn-lg btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER FINAL -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/petshop.js"></script>



</body>
</html>