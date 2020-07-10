<?php
    include_once 'includes/dbh.inc.php';

    $nombre = $_POST('nombre');
    $descripcion = $_POST('descripcion');
    $precio = $_POST('precio');
    $cantidad = $_POST('cantidad');
    $image = ""; 

    //-- Image --//
    $image_nombre = strtolower(trim($nombre, " "));
    $target_dir = "../img/products/";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image is 
    $check = getimagesize($_FILES["producto_image"]["tmp_name"]);
    if($check === false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Upload
    if($uploadOk == 1) {
        $temp = explode(".", $_FILES["producto_image"]["name"]);
        $newfilename = $image_nombre . end($temp);
        $target_file = $target_dir . $newfilename;
        move_uploaded_file($_FILES["producto_image"]["tmp_name"], $target_file);
        $image = $newfilename;
    }
    // Insert to Database

    $sql = "INSERT INTO productos(nombre, descripcion, precio, cantidad, `image`)
        VALUES ('{$nombre}',{$descripcion},{$precio},{$cantidad},{$image})";
