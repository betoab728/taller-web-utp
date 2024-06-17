
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Allqovet</title>
    <link rel="stylesheet" href="css/estilo-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

<form action="validarcliente.php" method="post">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesion</h2>
              <p class="text-white-50 mb-5">Por favor ingrese su usuario y contraseña</p>

              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Ingrese su usuario" name="usuario" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Usuario</label>
              </div>
                
              <div class="form-outline form-white mb-4">
                <input type="password" placeholder="Ingrese su contraseña" name="contraseña"class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Contraseña</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              <!-- <button class="btn btn-outline-light btn-lg px-5" type="button" href="nuevo_cliente.php">Crear cuenta</button> -->

              <a href="nuevo_cliente.php" class="btn btn-outline-light btn-lg px-5">Crear cuenta</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

</body>
</html>