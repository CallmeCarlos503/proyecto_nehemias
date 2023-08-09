<?php

include_once('../db/connection.php');
?>
<?php

if (isset($_POST['btn_enviar'])) {
    // Verificar si se subió una imagen
    if (isset($_FILES["image"])) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "La imagen se ha subido correctamente.";
        } else {
            echo "Ha ocurrido un error al subir la imagen.";
        }
        $repo1 = $target_file;
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
        $repo2 = $target_file;
    }
?>
  <?php

    $Nombre = $_POST["txtNombre"];
    $Descripcion = $_POST["txtDescripcion"];
    $DIRECCION = $_POST["txtDireccion"];
    $Precio = $_POST["txtPrecio"];
    $Estado = $_POST["opciones"];
    $query = "insert into paquetes(ID,NOMBRE,DESCRIPCION,IMAGEN,DIRECCION_MAPA,VIDEO,PRECIO,ID_ESTADOS) 
    values( null,'$Nombre','$Descripcion','$repo1','$DIRECCION','$repo2',$Precio,$Estado);";
    mysqli_query($mysqli, $query);
    header('Location:../administrador_insercion.php?active=1');

} elseif (isset($_POST['btnsubmit'])) {
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
    $dato1 = $_POST['opciones'];
    $query = "insert into imagenes values( null,'$ruta_archivo',$dato1);";
    mysqli_query($mysqli, $query);
    header('Location:../insertimgadmin.php?active=1');
}
elseif (isset($_POST['btnregistrar'])) {
    $usuario=$_POST['txtusuarior'];
    $mail=$_POST['txtmailr'];
    $password= $_POST['txtpasswordr'];
    $tel=$_POST['txttelr'];
    $query="INSERT INTO USUARIO VALUES(NULL,'$usuario','$password','$mail','$tel',1,1)";
    mysqli_query($mysqli,$query);
    header('Location:../registrarse.php?exito=1');
}

    ?>