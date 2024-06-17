<?php
include('cabecera.php');
?>
<!-- SLIDER -->
<div class="container-slider">
    <div class="slider" id="slider">
        <div class="slider_img">

              <img class="slider__img" src="./img/max.jpeg" alt="Imagen 1">
            
        </div>
        <div class="slider_img">
          
            <img class="slider__img" src="./img/boy.jpeg" alt="Imagen 2">
        </div>
        <div class="slider_img">
          
            <img class="slider__img" src="./img/gato.jpg" alt="Imagen 3">
        </div>
    </div>
    <div class="slider__btn slider__btn--right" id="btn-right"><i class="fa-solid fa-circle-chevron-right"></i></div>
    <div class="slider__btn slider__btn--left" id="btn-left"><i class="fa-solid fa-circle-chevron-left"></i></div>
</div>
<!-- FIN SLIDER -->


<!-- JAVA SCRIPT-->
<script src="./js/slider.js"></script>



<!-- CONSULTA MEDICA -->
    <div id="Conocenos" class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/diaco.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h3 id="conocenos" class="d-inline-block text-uppercase border-bottom border-3">Baños Medicados</h3>
                    </div>
                    <p  id= "parrafo">En Allqovet brindamos servicio de baños medicados contra pulgas y garrapatas y contra problemas de piel.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>