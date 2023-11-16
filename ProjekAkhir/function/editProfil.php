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


    if (isset($_POST['editProfil'])) {
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = $_POST['email'];
        $noTelp = $_POST['noTelp'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if($password === $cpassword){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "UPDATE user SET fname='$fname', lname='$lname', noTelp='$noTelp', password='$password' WHERE email = '$email'");

            if ($result) {
                echo "
                <script>
                    alert('Success!');
                    document.location.href = 'account.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Failed!');
                    document.location.href = 'editUser.php';
                </script>";
            }
        } else {
            echo "
                <script>
                    alert('Konfirmasi Password tidak sesuai!');
                    document.location.href = 'editUser.php';
                </script>
            ";
        }
    }
?>