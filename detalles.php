<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina principal</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="/node_modules/sweetalert2/dist/sweetalert2.min.css"></script>
    <link rel="stylesheet" href="./css/style.css" />

    <style>
        @media only screen and (max-width: 600px) {
            .w-100 {
                height: 150px;
                padding-right: 10%;
                padding-left: 10%;
            }


        }
    </style>

</head>

<body>
    <?php include_once('./db/connection.php') ?>
    <div class="color-navbar">
        <?php
        include_once('./assets/navbarcliente.php')
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

        <?php
        $id = $_REQUEST['ID'];
        $query = "SELECT IMAGENES.NOMBRE AS IMAGEN,paquetes.NOMBRE,paquetes.IMAGEN AS IMAGENPAQUETE,paquetes.DESCRIPCION,
        paquetes.DIRECCION_MAPA AS MAPA,PAQUETES.VIDEO,paquetes.PRECIO, paquetes.NOMBRE AS NOMBRE
        FROM imagenes,paquetes WHERE paquetes.ID=$id;";
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $Dato1 = $row["NOMBRE"];
                $Dato2 = $row["DESCRIPCION"];
                $Dato3 = $row["IMAGENPAQUETE"];
                $Dato4 = $row["PRECIO"];
                $Dato5 = $row["VIDEO"];
                $Dato6 = $row["MAPA"];
            }
            $result->free();
        }
        mysqli_query($mysqli, $query);
        ?>


        <br>
        <div class="row g-0 bg-body-secondary position-relative">
            <div class="col-md-6 mb-md-0 p-md-4">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">

                        <?php
                        $query = "SELECT IMAGENES.NOMBRE AS IMAGEN,paquetes.NOMBRE,paquetes.IMAGEN AS IMAGENPAQUETE,paquetes.DESCRIPCION,
                        paquetes.DIRECCION_MAPA AS MAPA,PAQUETES.VIDEO,paquetes.PRECIO
                        FROM imagenes,paquetes WHERE paquetes.ID=IMAGENES.ID_PAQUETE && IMAGENES.ID_PAQUETE=$id;";
                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $DatoI1 = $row["IMAGEN"];
                                $contador = 0;
                                if ($contador == 0) {

                        ?>
                                    <div class="carousel-item active">
                                        <img src="<?php echo $DatoI1 ?>" class="d-block w-100" width="100px" alt="...">
                                    </div>
                                <?php
                                    $contador = $contador + 1;
                                } else if ($contador > 0) {
                                ?>
                                    <div class="carousel-item">
                                        <img src="<?php echo $DatoI1 ?>" class="d-block w-100" width="100px" alt="...">
                                    </div>
                        <?php
                                }
                            }
                            $result->free();
                        }
                        mysqli_query($mysqli, $query);
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br>


            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0"><?php echo $Dato1 ?></h5>
                <p>

                    <?php echo $Dato2 ?>
                    <br>
                <h2>Precio: $ <?php echo $Dato4 ?> </h2>

                </p>
                <?php if (isset($_COOKIE["usuario"])) {?>
                <a href="#" class="btn btn-primary">
                    Añadir al carrito
                </a>
                <?php
                }
                ?>
                <button class="btn btn-dark" onclick="video()">
                    ver video
                </button>
                <button class="btn btn-dark" onclick="mapa()">
                    ver mapa
                </button>
                <script>
                    function video() {
                        Swal.fire({
                            title: '<strong> <u><?php echo $Dato1 ?></u></strong>',
                            html: '<video src="<?php echo $Dato5 ?>" width="300px" controls autoplay></video>',
                            showCloseButton: true,
                        })
                        event.preventDefault();
                    }

                    function mapa() {
                        Swal.fire({
                            title: '<strong> <u><?php echo "MAPA" ?></u></strong>',
                            html: '<?php echo $Dato6 ?>',
                            showCloseButton: true,
                        })
                        event.preventDefault();
                    }
                </script>
            </div>
        </div>
    </div>

</body>

</html>