<?php
    session_start();
    require "connection.php";

    $id = $_GET['id'];

    $get = mysqli_query($conn, "SELECT * FROM product WHERE id_product = $id");

    $product = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $product[] = $row;
    }
    
    $product = $product[0];

    $get_image = $product['gambar'];

    if (isset($_POST['edit'])) {
        $name = htmlspecialchars($_POST['name']);
        $flavour = $_POST['flavour'];
        $desc = htmlspecialchars($_POST['desc']);
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $image = $_FILES['image']['name'];
        $datetime = date('Y-m-d');
        $x = explode('.', $image);
        $extension = strtolower(end($x));

        $new_image = "$datetime $name.$extension";
        $tmp = $_FILES['image']['tmp_name'];

        unlink('upload/'.$get_image);
        if (move_uploaded_file($tmp, "upload/".$new_image)) {
            $result = mysqli_query($conn, "UPDATE product SET name='$name', flavour='$flavour', descript='$desc', price='$price', stock='$stock', gambar='$new_image' WHERE id_product = $id");

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
                    document.location.href = 'edit_data.php';
                </script>";
            }
        }
    }
?>