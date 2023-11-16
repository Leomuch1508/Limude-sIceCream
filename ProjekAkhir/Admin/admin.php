<?php 
    include "../function/showAccount.php";
    include "../function/show.php";
    include "../function/showPesanan.php";
    require "../Session/adminSession.php";
    date_default_timezone_set("Asia/Makassar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Limude's Ice Cream</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="admin-sidebar">
        <div class="admin-sidebar-icon">
            <a href="dashboardAdmin.php"><button><i class="fa fa-sign-out"></i></button></a>
        </div>
    </section>
    <div class="admin-main">
        <p><?php echo date('l, d M Y | e', time()) , "<br>\n"; ?></p>
        <section class="admin-main-content">
            <h1>Manajemen Menu</h1>
            <br>
            <div class="table-action-container">
                <a href="add_data.php"><button>Tambah</button></a>
            </div><br>
            <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Flavour</th>
                    <th>Desc</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; foreach ($product as $prdt) :?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $prdt['name']; ?></td>
                    <td><?php echo $prdt['flavour']; ?></td>
                    <td><?php echo $prdt['descript']; ?></td>
                    <td><?php echo $prdt['price']; ?></td>
                    <td><?php echo $prdt['stock']; ?></td>
                    <td>
                        <div class="action-button">
                            <a href="edit_data.php?id=<?php echo $prdt['id_product']?>">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                        <path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/>
                                    </svg>
                                </button>
                            </a>
                            <a href="delete_data.php?id=<?php echo $prdt['id_product']?>" onclick="return confirm('Are you sure want to delete <?php echo $prdt['name']?>?')">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </table>
            </div>
        </section>
        <section class="admin-main-content">
            <h1>Account user</h1>
            <br>
            <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Password</th>

                </tr>
                <?php $i = 1; foreach ($user as $usr) :?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $usr['fname']; ?></td>
                    <td><?php echo $usr['lname']; ?></td>
                    <td><?php echo $usr['email']; ?></td>
                    <td><?php echo $usr['noTelp']; ?></td>
                    <td><?php echo $usr['password']; ?></td>
                </tr>
                <?php $i++; endforeach; ?>
            </table>
            </div>
        </section>
        <section class="admin-main-content">
            <h1>Pesanan User</h1>
            <br>
            <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Ice Cream</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; foreach ($pesanan as $order) :?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $order['Nama']; ?></td>
                    <td><?php echo $order['Eskrim']; ?></td>
                    <td><?php echo $order['quantity']; ?></td>
                    <td><?php echo $order['total_price']; ?></td>
                    <td><?php echo $order['order_date']; ?></td>
                    <td>
                        <div class="action-button">
                            <a href="konfirm.php?id=<?php echo $order['id_pesanan']; ?>">
                                <button>Konfirmasi</button>
                            </a>
                            <a href="reject.php?id=<?php echo $order['id_pesanan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menolak pesanan ini?')">
                                <button>Tolak</button>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </table>
            </div>
        </section>
    </div>
</body>

</html>