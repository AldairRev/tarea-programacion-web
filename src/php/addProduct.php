<?php
    include_once 'includes/dbh.inc.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $image = ""; 

    //-- Image --//
    
    $image_nombre = round(microtime(true));
    $target_dir = "../img/products/";
    $temp = explode(".", $_FILES["producto_image"]["name"]);
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
            $image = "no-imagen.jpg";
        } else {
            $image = $newfilename;
            move_uploaded_file($_FILES["producto_image"]["tmp_name"], $target_file);
        }
        // Insert to Database
        $sql = "INSERT INTO productos(nombre, descripcion, precio, cantidad, `image`)
        VALUES ('{$nombre}','{$descripcion}',{$precio},{$cantidad},'{$image}')";
        mysqli_query($conn, $sql) or die (mysqli_error($conn));

        echo "Se subio correctamente el producto";
    } else {
        die("No se pudo subir el archivo");
    }
    

    
    
