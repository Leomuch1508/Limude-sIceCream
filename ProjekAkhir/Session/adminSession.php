<?php
    session_start();
    if(!isset($_SESSION["admin_login"])) {
        echo 
        "<script> 
            alert('Anda Belum Login Broo');
            document.location.href = '../Action/login.php';
        </script>";
        exit;
    }
?>