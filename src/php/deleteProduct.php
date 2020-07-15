<?php
    include_once 'includes/dbh.inc.php';

    $id = $_POST["id"];
    $sql = "DELETE FROM productos WHERE id = ${id}";
    $result = mysqli_query($conn, $sql);
    echo mysqli_error($conn);
    
    echo "Se elimino correctamente el producto";