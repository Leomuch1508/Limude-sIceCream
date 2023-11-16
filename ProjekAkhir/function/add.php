<?php
    require "connection.php";
    if (isset($_POST['add'])) {
        $name = htmlspecialchars($_POST['name']);
        $flavour = $_POST['flavour'];
        $desc = htmlspecialchars($_POST['desc']);
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $datetime = date('Y-m-d');

        $image = $_FILES['image']['name'];
        $x = explode('.', $image);
        $extension = strtolower(end($x));

        $new_image = "$datetime $name.$extension";
        $tmp = $_FILES['image']['tmp_name'];

        if (move_uploaded_file($tmp, 'upload/'.$new_image)) {
            $result = mysqli_query($conn, "INSERT INTO product VALUES ('', '$name', '$flavour', '$desc', '$price', '$stock', '$new_image')");
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
                    document.location.href = 'add_data.php';
                </script>";
            }
        }
    }
?>