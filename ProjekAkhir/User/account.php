<?php
    require"../function/connection.php";
    session_start();

    if (!isset($_SESSION['login'])) {
        echo "
            <script>
                alert('Login first to enter here!');
            </script>";
        header("Location: login.php");
        exit();
    }

    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "select * from user where email = '$email'");
    $user = mysqli_fetch_assoc($result);

    date_default_timezone_set("Asia/Makassar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account User - Limude's Ice Cream</title>
    <link rel="stylesheet" href="../css/user.css">
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="user-sidebar">
        <a href="dashboardUser.php" onclick="return confirm('Back to home?')"><button><i class="fa fa-sign-out"></i></button></a>
    </section>
    <div class="user-main">
        <div class="user-main-content">
            <p><?php echo date('l, d M Y | e', time()) , "<br>\n"; ?></p>
            <h1>Akun</h1>
        </div>
        <div class="nav-content">
            <a href="keranjang.php"><button>Pesanan<i class="fas fa-shopping-cart"></i></button></a><hr>
            <a href="changePwUser.php"><button>Change Password<i class="fas fa-key"></button></i></a><hr>
            <a href="riwayatPesanan.php"><button>Riwayat Pesanan<i class="fas fa-history"></i></button></a>
        </div>
        <div class="profil">
            <div class="table-action-container">
                <p><?php echo $user['fname'] . ' ' . $user['lname']; ?></p>
                <a href="editUser.php"><button>Edit Profil</button></a>
            </div>
            <div class="table-container">
                <table class="biodata">
                    <tr>
                        <td>First Name</td>
                        <td>:</td>
                        <td><?php echo $user['fname']; ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>:</td>
                        <td><?php echo $user['lname']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $user['email']; ?></td>
                    <tr>
                        <td>No Handphone</td>
                        <td>:</td>
                        <td><?php echo $user['noTelp']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
</body>

</html>