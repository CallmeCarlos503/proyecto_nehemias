<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagina principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./js/logico.js"></script>
  <script src="./js/buscador.js"></script>
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <?php include_once('./db/connection.php') ?>
  <div class="color-navbar">
    <?php
    include_once('./assets/navbarcliente.php');
    ?>
  </div>
  <section class="presentacion">
    <div class="texto">
      <div class="move">
        <h1>BERGEN</h1>
        <h3>NORWAY</h3>
      </div>
    </div>
  </section>
  <div class="zonas">
    <br />
    <div class="container-fluid">
      <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Search.."/>
    </div>
    <div class="container text-center">
      <?php
      $query = "SELECT * FROM paquetes WHERE ID_ESTADOS=1";
      if ($result = $mysqli->query($query)) {
      ?>
        <table style="border-collapse:separate;border-spacing:10px; justify-content:center" class="order-table">

          <?php
          $contador = 0;
          while ($row = $result->fetch_assoc()) {
            $campo1 = $row["NOMBRE"];
            $campo2 = $row["DESCRIPCION"];
            $campo3 = $row["IMAGEN"];
            $campo4 = $row["VIDEO"];
            $campo5 = $row["PRECIO"];
            $clave=$row["ID"];
            if ($contador == 3) {
              echo "<tr>";
            }
          ?>
            <td>
              <div class="content">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo $campo3 ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $campo1 ?></h5>
                    <p class="card-text">$ <?php echo $campo5 ?></p>
                    <?php
                    echo "<a href=detalles.php?ID=$clave class='btn btn-primary'>Ver mas</a>";
                    ?>
                    
                  </div>
                </div>
              </div>

            </td>
            <?php
            $contador = $contador + 1;
            ?>
        <?php

            if ($contador == 3) {
              echo "</tr>";
              $contador + 0;
            }
          }
        }
        $result->free();

        ?>
        </table>



        <br>
    </div>
  </div>
</body>

</html>