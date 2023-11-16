<?php
    session_start();
    require "connection.php";

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM product WHERE id_product = $id");
    
    $product = [];

    $get_image = $product['image'];
    unlink('upload/'.$get_image);

    if ($result) {
        echo "
        <script>
            alert('Success!');
            document.location.href = 'menu.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed!');
            document.location.href = 'menu.php';
        </script>";
    }
?>