<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagina de inicio</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./node_modules/fontawesome-free-6.4.2-web/css/all.css">
  <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.css">
  <script src="./node_modules/fontawesome-free-6.4.2-web/js/all.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="./node_modules/sweetalert2/dist/sweetalert2.js"></script>
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
              <a class="nav-link" aria-current="page" href="index.php">INICIA SESION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active disabled" aria-readonly="true" href="registrarse.html">REGISTRATE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ACERCA DE NOSOTROS</a>
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
        <form action="./actions/action.php" method="post">
          <div class="input-group mb-3">

            <div class="input-group mb-3" style="margin-top: 10%; margin-left: 1%">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa-solid fa-user-large"></i>
              </span>
              <input type="text" name="txtusuarior"  class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1" style="background-color: transparent; color: white" required />
            </div>
            <div class="input-group mb-3" style="margin-top: 5%; margin-left: 1%">
              <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg>
              </span>
              <input type="email" name="txtmailr" require class="form-control" placeholder="Correo electronico" aria-label="Username" aria-describedby="basic-addon1" required="true" style="background-color: transparent; color: white" />
            </div>
            <div class="input-group mb-3" style="margin-top: 5%; margin-left: 1%">
              <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                </svg>
              </span>
              <input type="password" name="txtpasswordr" require class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" style="background-color: transparent; color: white" />
            </div>
            <div class="input-group mb-3" style="margin-top: 5%; margin-left: 1%">
              <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
                </svg>
              </span>
              <input type="tel" name="txttelr" require class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1" style="background-color: transparent; color: white" />
            </div>
          </div>
          <button type="submit" class="btn btn-outline-light boton-iniciar-sesion" name="btnregistrar">
            Registrarse
          </button>
        </form>
        <br>
      </div>
      <div class="col">
        <?php
        if (isset($_REQUEST['exito'])) {
          
        ?>
          <script>
            Swal.fire(
              'registro completo',
              'se ha logrado registrar completamente',
              'success'
            )
            event.preventDefault();
          </script>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
</body>

</html>