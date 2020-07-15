<?php
    include_once 'includes/dbh.inc.php';

    $sql = "SELECT * FROM productos";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $productos = [];

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result))
        {
            array_push($productos, (object)$row);
        }
    }
    
    echo json_encode($productos);
