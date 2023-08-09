<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>


  <?php
  include_once('./db/connection.php');
  
  ?>
  <form action="prueba.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="formFile" class="form-label">Seleccione una imagen</label>
      <input class="form-control" type="file"  name="image" id="image">
      <br>
      <label for="formFile" class="form-label">Seleccione un video</label>
      <input class="form-control" type="file"  name="video" id="video">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Agrega Nombre</label>
      <input type="text" name="txtNombre" required class="form-control" id="exampleFormControlInput1" placeholder="Paquete turistico">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Agrega Descripcion</label>
      <textarea class="form-control" name="txtDescripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Agrega direccion de mapa</label>
      <textarea class="form-control" name="txtDireccion" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Agrega Precion</label>
      <input type="number" step="0.01" name="txtPrecio" required class="form-control" id="exampleFormControlInput1" placeholder="Paquete turistico">
    </div>
    <select name="opciones" class="form-select" aria-label="Default select example">
      <option selected>seleccione una opcion</option>
      <?php
      $query = "SELECT * FROM estados";
      if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
          $Dato1 = $row["NOMBRE"];
          $clave = $row['ID'];
      ?>
          <option  value='<?php echo $clave ?>'><?php echo $Dato1 ?></option>
      <?php
        }
        $result->free();
      }
      mysqli_query($mysqli, $query);
      ?>

    </select>
    <input type="submit" name="btn_enviar" value="Subir archivos">
  </form>
  <?php
  // Verificar si se subió una imagen
  if (isset($_FILES["image"])) {
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "La imagen se ha subido correctamente.";
    } else {
      echo "Ha ocurrido un error al subir la imagen.";
    }
    $repo1=$target_file;
  }

  // Verificar si se subió un video
  if (isset($_FILES["video"])) {
    $target_dir = "video/";
    $target_file = $target_dir . basename($_FILES["video"]["name"]);
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
      echo "El video se ha subido correctamente.";
    } else {
      echo "Ha ocurrido un error al subir el video.";
    }
    $repo2=$target_file;
  }
  ?>
  <?php
  if (isset($_POST['btn_enviar'])) {
    $Nombre = $_POST["txtNombre"];
    $Descripcion=$_POST["txtDescripcion"];
    $DIRECCION=$_POST["txtDireccion"];
    $Precio=$_POST["txtPrecio"];
    $Estado=$_POST["opciones"];
    $query = "insert into paquetes(ID,NOMBRE,DESCRIPCION,IMAGEN,DIRECCION_MAPA,VIDEO,PRECIO,ID_ESTADOS) 
    values( null,'$Nombre','$Descripcion','$repo1','$DIRECCION','$repo2',$Precio,$Estado);";
    mysqli_query($mysqli, $query);
  }

  ?>
</body>

</html>