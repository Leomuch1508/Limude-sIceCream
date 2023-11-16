<?php
    require "connection.php";

    $result = mysqli_query($conn, "SELECT * FROM pesanan");
    $pesanan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $pesanan[] = $row;
    }
?>