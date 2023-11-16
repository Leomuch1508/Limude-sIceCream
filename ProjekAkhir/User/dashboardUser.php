<?php
    require"../function/connection.php";
    require"../function/show.php";
    require"../Session/loginSession.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limude's Ice Cream</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body id="nav">
    <?php include('../include/navbarUser.php') ?>
    <section class="hero">
        <div class="hero-title">
            <h1>Welcome To <br> Limude's Ice Cream!</h1>
            <p id="desc">Made with Love ♥️♥️♥️</p>
        </div>
        <div class="hero-desc">
            <p>Dari Susu Murni</p>
            <div class="showing">
                <div class="showing-image"></div>
            </div>
            <p>100% Halal</p>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>