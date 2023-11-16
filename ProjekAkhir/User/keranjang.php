<?php
    require "../function/connection.php";
    require "../Session/loginSession.php";
    
    require "../function/showOrder.php";
    $id_product = [];
    foreach ($pesanan as $item_pesanan) {
        $id_product = $item_pesanan['id_product'];
    
        // Mengambil informasi produk berdasarkan id_product
        $result_product = mysqli_query($conn, "SELECT * FROM product WHERE id_product = $id_product");
    
        // Memasukkan informasi produk ke dalam array $product
        while ($row = mysqli_fetch_assoc($result_product)) {
            $product[] = $row;
        }
    }
    date_default_timezone_set("Asia/Makassar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Pesanan</title>
    <link rel="stylesheet" href="../css/keranjang.css">
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="user-sidebar">
        <a href="account.php"><button><i class="fa fa-sign-out"></i></button></a>
    </section>
    <div class="user-main">
        <div class="user-main-content">
            <p><?php echo date('l, d M Y | e', time()) , "<br>\n"; ?></p>
            <h1>Keranjang</h1>
        </div>
        <div class="product">
            <?php foreach ($product as $prdt) : ?>
                <?php foreach ($pesanan as $order) : ?>
                    <?php if ($order['id_product'] == $prdt['id_product'] && $order['status'] == 'Diproses' && !($order['status'] == 'Diterima')) : ?>
                        <div class="item">
                            <h1 name="produk" id="produk"><?php echo $prdt['name']; ?></h1>
                            <img src="../upload/<?php echo $prdt['gambar']; ?>">
                            <p>Flavour : <?php echo $prdt['flavour']; ?></p>
                            <p>Deskripsi : <?php echo $prdt['descript'] ?> </p>
                            <p>Price : <?php echo $prdt['price'] ?> </p>
                            <p>Stok : <?php echo $prdt['stock']; ?></p>
                            <p>Quantity: <?php echo $order['quantity']; ?></p>
                            <p>Total Price: <?php echo $order['total_price']; ?></p>
                            <p>Order Date: <?php echo $order['order_date']; ?></p>  
                            <p>Status: <?php echo $order['status']; ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
</body>
</html>
