<?php
    require "connection.php";

    $result = mysqli_query($conn, "SELECT * FROM product");
    $product = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $product[] = $row;
    }
?>