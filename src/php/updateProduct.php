<?php
    include_once 'includes/dbh.inc.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $image = ""; 

    //-- Image --//
    $image_nombre = round(microtime(true));
    $target_dir = "../img/products/";
    $temp = explode(".", $_FILES["edit_image"]["name"]);
    $newfilename = $image_nombre . "." . end($temp);
    $target_file = $target_dir . $newfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Upload
    if($uploadOk === 1) {
        if (!($imageFileType != "")) {
            $sql = "UPDATE productos
                SET nombre = '${nombre}', descripcion = '${descripcion}', precio = ${precio}, cantidad = ${cantidad}
                WHERE id = ${id}";
        } else {
            $image = $newfilename;
            move_uploaded_file($_FILES["edit_image"]["tmp_name"], $target_file);
            $sql = "UPDATE productos
                SET nombre = '${nombre}', descripcion = '${descripcion}', precio = ${precio}, cantidad = ${cantidad}, `image` = '${image}'
                WHERE id = ${id}";
        }
        // Insert to Database
        
        mysqli_query($conn, $sql) or die (mysqli_error($conn));

        echo "Se actualizo correctamente el producto";
    } else {
        die("No se pudo actualizar el archivo");
    }
    

    
    
