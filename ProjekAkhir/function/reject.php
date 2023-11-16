<?php
    require "function/connection.php";

    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $result_delete = mysqli_query($conn, "DELETE FROM pesanan WHERE id_pesanan = '$id'");

        if ($result_delete) {
            echo "
            <script>
                alert('Pesanan Berhasil Ditolak!');
                document.location.href = 'menu.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Gagal Menolak Pesanan!');
                document.location.href = 'menu.php';
            </script>
            ";
        }
    }
?>
