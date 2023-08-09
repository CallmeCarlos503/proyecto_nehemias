<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php
    include_once('./db/connection.php')
    ?>

    <h1>Subir imagen</h1>
    <form action="agregado.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona una imagen:</label>
        <input type="file" name="archivo" id="archivo">
        <br>
        <label for="archivo">Seleccione el destino para esa imagen:</label>
        <select name="opciones" class="form-select" aria-label="Default select example">
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
        <input type="submit" name="btnsubmit" value="Subir">
    </form>

    <?php
    if (isset($_POST['btnsubmit'])) {
    if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
        $nombre_archivo = $_FILES["archivo"]["name"];
        $ruta_archivo = "img/" . $nombre_archivo;
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta_archivo)) {
            echo "El archivo se subió correctamente.";
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "Hubo un error al subir el archivo.";
    }
    $dato1=$_POST['opciones'];
    $query = "insert into imagenes values( null,'$ruta_archivo',$dato1);";
    mysqli_query($mysqli, $query);
}
    ?>
</body>

</html>