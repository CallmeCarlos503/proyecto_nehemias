<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insercion de datos</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/logico.js"></script>
    <link rel="stylesheet" href="./css/style.css" />

</head>

<body>
    <?php include_once('./db/connection.php') ?>
    <div class="color-navbar">
        <?php include_once('./assets/navbaradmin.php')?>
    </div>
    <section class="presentacion">
        <div class="texto">
            <div class="move">
                <h1>BIENVENIDO</h1>
                <h3>ADMINISTRADOR</h3>
            </div>
        </div>
    </section>
    <div class="zonas">
        <br />

        <br />
        <h4 style="margin-left: 5%">Area de insercion de imagenes</h4>

        <div class="container text-center">
            <form action="./actions/action.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label editor" style="color: black;">Seleccione una imagen:</label>
                    <input class="editor form-control" type="file" name="archivo" id="archivo">
                </div>
                <div class="mb-3">
                    <label class=" form-label editor" for="archivo">Seleccione el destino para esa imagen:</label>
                    <select name="opciones" class="editor form-select" aria-label="Default select example">
                        <option selected>seleccione una opcion</option>
                        <?php
                        $query = "SELECT * FROM paquetes";
                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $Dato1 = $row["NOMBRE"];
                                $clave = $row['ID'];
                        ?>
                                <option value='<?php echo $clave ?>'><?php echo $Dato1 ?></option>
                        <?php
                            }
                            $result->free();
                        }
                        mysqli_query($mysqli, $query);
                        ?>

                    </select>
                </div>
                <input type="submit" name="btnsubmit" class="btn btn-dark" value="Subir">
            </form>
            <br><br>
        </div>
    </div>
    <script src="./js/buscador.js"></script>
</body>

</html>