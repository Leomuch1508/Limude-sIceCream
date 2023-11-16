<?php
require "connection.php";

session_start();
$email = $_SESSION["email"];

$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

$user = [];

while ($row = mysqli_fetch_assoc($result)) {
    $user[] = $row;
}

$user = $user[0];

if (isset($_POST['changePassword'])) {
    $oldPassword = $_POST['oldPassword'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $oldPasswordHash = $user['password'];

    if (password_verify($oldPassword, $oldPasswordHash)) {
        if ($password === $cpassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            // Update the password in the database
            $result = mysqli_query($conn, "UPDATE user SET password='$password' WHERE email = '$email'");

            if ($result) {
                echo "
                <script>
                    alert('Success Change Password!');
                    document.location.href = 'account.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Failed!');
                    document.location.href = 'changePwUser.php';
                </script>";
            }
        } else {
            echo "
                <script>
                    alert('Konfirmasi Password tidak sesuai!');
                    document.location.href = 'changePwUser.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Password lama tidak sesuai!');
                document.location.href = 'changePwUser.php';
            </script>
        ";
    }
}
?>
