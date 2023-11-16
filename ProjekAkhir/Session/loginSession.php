<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        echo 
        "<script> 
            alert('Anda Belum Login Broo');
            document.location.href = '../Action/login.php';
        </script>";
        exit;
    }
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "select * from user where email = '$email'");
    $user = mysqli_fetch_assoc($result);
    $id_user = $user['id_user'];
?>