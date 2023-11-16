<?php 
    include "function/showAccount.php";
    date_default_timezone_set("Asia/Makassar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Ice Cream Dey</title>
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="admin-sidebar">
        <div class="admin-sidebar-icon">

        </div>
    </section>
    <div class="admin-main">
        <nav>

        </nav>
        <section class="admin-main-content">
            <a href="dashboardAdmin.php"><button><i class="fa fa-arrow-left"></i></button></a>
            <h1>Account user</h1>
            <p><?php echo date('l, d M Y | e', time()) , "<br>\n"; ?></p>
            <br>
            <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Tanggal</th>
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
    </div>
</body>

</html>