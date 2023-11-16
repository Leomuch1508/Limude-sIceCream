<?php
    require "connection.php";

    $query = "SELECT user.fname AS 'Nama', product.name AS 'Eskrim', pesanan.quantity, pesanan.total_price, pesanan.order_date, pesanan.id_pesanan
            FROM pesanan 
            INNER JOIN user ON user.id_user = pesanan.id_user
            INNER JOIN product ON product.id_product = pesanan.id_product";
    $result_pesanan = mysqli_query($conn, $query);
    $pesanan = [];
    while ($row = mysqli_fetch_assoc($result_pesanan)) {
        $pesanan[] = $row;
    }
?>