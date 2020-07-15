<?php
    include_once 'includes/dbh.inc.php';

    $id = $_GET["id"];

    $sql = "SELECT * FROM productos WHERE id = ${id}";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $producto = [];

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result))
        {
            $producto["id"] = $row["id"];
            $producto["nombre"] = $row["nombre"];
            $producto["descripcion"] = $row["descripcion"];
            $producto["precio"] = $row["precio"];
            $producto["cantidad"] = $row["cantidad"];
            $producto["image"] = $row["image"];
        }
    }
    echo json_encode($producto);


