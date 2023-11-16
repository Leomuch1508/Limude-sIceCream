<?php
    require "../function/connection.php";
    require "../Session/loginSession.php";
    date_default_timezone_set("Asia/Makassar");

    if (isset($_GET["id"])) {
        $id_product = $_GET["id"];
        $result_product = mysqli_query($conn, "SELECT * FROM product WHERE id_product = $id_product");

        if ($result_product) {
            $data_pesanan_eskrim = mysqli_fetch_assoc($result_product);

            if (isset($_POST["order"])) {
                $quantity = $_POST["quantity"];
                $totalPrice = $data_pesanan_eskrim['price'] * $quantity;
                date_default_timezone_set('Asia/Makassar');
                $localTimezone = new DateTimeZone('Asia/Makassar');
                $date = new DateTime('now', $localTimezone);
                $formatDate = $date->format('Y-m-d H:i:s');
                $status = 'Diproses';

                // Check if the user already has an order for the same product
                $existing_order_result = mysqli_query($conn, "SELECT * FROM pesanan WHERE id_user = '$id_user' AND id_product = '$id_product' AND status = '$status'");
                $existing_order = mysqli_fetch_assoc($existing_order_result);

                if ($existing_order) {
                    // If an existing order is found, update the quantity and total price
                    $newQuantity = $existing_order['quantity'] + $quantity;
                    $newTotalPrice = $existing_order['total_price'] + $totalPrice;

                    $result_order = mysqli_query($conn, "UPDATE pesanan SET quantity = '$newQuantity', total_price = '$newTotalPrice', order_date = '$formatDate', status = '$status' WHERE id_pesanan = '$existing_order[id_pesanan]'");
                    if ($result_order) {
                        echo "
                        <script>
                            alert('Pesanan Berhasil Di Tambah Ke Keranjang');
                            document.location.href = 'product.php';
                        </script>
                        ";
                    } else {
                        echo "
                        <script>
                            alert('Pesanan Gagal Di Tambah Ke Keranjang');
                            document.location.href = 'addPesanan.php';
                        </script>
                        ";
                    }
                } else {

                    $result_order = mysqli_query($conn, "INSERT INTO pesanan VALUES ('', '$id_user', '$id_product', '$quantity', '$totalPrice', '$formatDate', '$status')");
                    if ($result_order) {
                        echo "
                        <script>
                            alert('Pesanan Berhasil Di Tambah Ke Keranjang');
                            document.location.href = 'product.php';
                        </script>
                        ";
                    } else {
                        echo "
                        <script>
                            alert('Pesanan Gagal Di Tambah Ke Keranjang');
                            document.location.href = 'addPesanan.php';
                        </script>
                        ";
                    }
                }
            }
        } else {
            echo "Es krim tidak ditemukan.";
            exit;
        }
    } else {
        echo "ID tidak ditemukan.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Limude's Ice Cream</title>
    <link rel="stylesheet" href="../css/pesanan.css">
    <script src="../javascript/order.js"></script>
   
</head>
<body>
    <div class="user-main">
        <div class="user-main-content">
            <p><?php echo date('l, d M Y | e', time()) , "<br>\n"; ?></p>
            <h1>Pesanan</h1>
            <a href="product.php">Kembali</a>
        </div>
        <div class="pesan">
            <div class="table-action-container">
            </div>
    
    <div class="container-pesanan">
        <div class="card">
            <h1 name="produk" id="produk"><?php echo $data_pesanan_eskrim['name']; ?></h1>
            <img src="../upload/<?php echo $data_pesanan_eskrim['gambar']; ?>" >
            <p>Flavour : <?php echo $data_pesanan_eskrim['flavour']; ?></p>
            <p>Deskripsi : <?php echo $data_pesanan_eskrim['descript'] ?> </p>
            <p>Price : <?php echo $data_pesanan_eskrim['price'] ?> </p>
            <p>Stok : <?php echo $data_pesanan_eskrim['stock']; ?></p>
        </div>
        <div class="order-form">
            <h3>Order</h3>
            <p>Silahkan Masukan Detail Pesanan</p>
            <form action="" method="post" onsubmit="setLocalTime()">
                <br>
                <div class="input-jumlah">
                    <label for="jumlah_eskrim">Quantity :</label>
                    <button type="button" onclick="decrement()">-</button>
                    <input type="number" id="jumlah_eskrim" name="quantity" value="1" min="1" max="99" required>
                    <button type="button" onclick="increment()">+</button>
                </div>
                <br>
                <div id="total-harga">
                    <p>Total Harga: Rp<span id="price"><?php echo $data_pesanan_eskrim['price']; ?></span></p>
                </div>

                <div>
                    <button type="submit" name="order" >Tambahkan Keranjang</button>

                </div>
            </form>
     
        </div>
    </div>

    <script>
        function updateTotal() {
            var quantity = parseInt(document.getElementById('jumlah_eskrim').value, 10);
            var hargaEskrim = <?php echo $data_pesanan_eskrim['price'] ?>;
            var totalHarga = quantity * hargaEskrim;

            document.getElementById('price').textContent = totalHarga;

            }
    </script>
</body>
</html>