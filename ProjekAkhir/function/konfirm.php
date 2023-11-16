<?php
    require "function/connection.php";
    
    if (isset($_GET["id"])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $status = 'Diterima';

        $result_confirm = mysqli_query($conn, "UPDATE pesanan SET status = '$status' WHERE id_pesanan = '$id'");

        if ($result_confirm) {
            echo "
            <script>
                alert('Pesanan Berhasil Di Konfirmasi!');
                document.location.href = 'menu.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Pesanan Gagal Di Konfirmasi!');
                document.location.href = 'menu.php';
            </script>
            ";
        }
    }
?>