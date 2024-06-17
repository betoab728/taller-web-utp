<?php
include('cabecera.php');
?>
<!--Separa una cita-->
<div class="title-contacto">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titulo-cita">
                <h2>Separa una cita</h2>
            </div>
        </div>
    </div>
  </div>

</div>



<!--formulario contacto -->
<div class="contacto">
<div class="container">
  <div class="row">
      <div class="col-md-12">

          <form class="formulario">
              <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                      <input class="form-control" placeholder="Nombre" type="text" name="nombre" id="nombre">
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                      <input class="form-control" placeholder="Correo" type="text" name="coreeo" id="correo">
                  </div>
                  <div class=" col-md-12">
                      <input class="form-control" placeholder="Telefono" type="text" name="telefono" id="telefono">
                  </div>
                  <div class="col-md-12">
                      <textarea class="textarea" placeholder="Mensaje" id="mensaje"></textarea>
                  </div>
                  <div class=" col-md-12">
                      <!-- <button class="boton" onclick="validar_formulario()">Enviar</button> -->
                      <input class="boton" type="button" value="Enviar" class="btn" onclick="validar_formulario()"> 
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
</div>

<!--fin separa una cita-->

<div class="container mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1986.6620833957559!2d-80.6223042!3d-5.2116569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x157b2a3ba94f8dcc!2zNcKwMTInMzkuOCJTIDgwwrAzNycyMS4wIlc!5e0!3m2!1ses!2spe!4v1665601205126!5m2!1ses!2spe" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<script src="./js/slider.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>