<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagina de inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./node_modules/fontawesome-free-6.4.2-web/css/all.min.css">
  <script src="./node_modules/fontawesome-free-6.4.2-web/js/all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./js/logico.js"></script>
</head>

<body>
  <div class="color-navbar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary color-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./img/Logo.gif" width="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active disabled" aria-current="page" href="#">INICIA SESION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarse.php">REGISTRATE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acercade.php">ACERCA DE NOSOTROS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col"></div>
      <div class="col" style="color: whitesmoke">
        <h1 class="titulo-logeo" style="text-align: right">
          ENJOY THE WORLD
        </h1>
        <form method="GET" action="./actions/action.php">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-envelope"></i></span>
            <input type="email" required class="form-control" placeholder="Correo electronico" aria-label="Username" aria-describedby="basic-addon1" style=" background-color: transparent; color: white" id="email" name="email" />

            <div class="input-group mb-3" style="margin-top: 10%; margin-left: 1%">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-lock"></i></span>
              <input type="password" required class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" style="background-color: transparent; color: white" id="password" name="password" />
            </div>
          </div>
          <button type="submit" name="btnlogin" class="btn btn-outline-light boton-iniciar-sesion">
            Iniciar Sesion
          </button>
          <a href="principal.php" class="btn btn-outline-light boton-iniciar-sesion btnmovil">
            Iniciar sesion como invitado
          </a>
        </form>
      </div>
      <div class="col"></div>
    </div>
  </div>

  <?php
  if (isset($_REQUEST['logico'])) {
  ?>
    <script>
      Swal.fire(
        'Error',
        'Usuario o contraseña no existentes',
        'error'
      )
    </script>

  <?php
  }
  ?>

</body>

</html>