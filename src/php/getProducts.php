<?php
    include_once 'includes/dbh.inc.php';

    $sql = "SELECT * FROM productos;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $productos = [];

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result))
        {
            $productos[$row['id']] = (object)$row;
        }
    }

