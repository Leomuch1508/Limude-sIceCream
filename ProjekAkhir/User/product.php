<?php
    require"../function/connection.php";
    require"../function/show.php";
    require"../Session/loginSession.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body id="nav">
    <nav>
        <div class="nav-icon">
            <a href="dashboardUser.php"><button><i class="fas fa-arrow-left"></i></button></a>
        </div>
        <div class="logo">
            <h1 id="logo">Limude's Ice Cream.</h1>
        </div>
        <ul class="list-item">
            <li><a href="dashboardUser.php">Home</a></li><hr>
            <li><p>Products<a href="product.php"></a></p></li><hr>
            <li><a href="about.php">About Us</a></li>
        </ul>
        <div class="toggle">
            <button onclick="toggleDarkMode()"><i class="fas fa-moon" id="icon"></i></button>
        </div>
        <ul class="nav-links">
            <p><?php echo $user['fname']; ?></p>
            <li><a href="account.php"><button><i class="fa fa-user"></i></button></a></li>
        </ul>
        <span class="toggleBox"><i class="fa-solid fa-bars" id="toggle-bar"></i></span>
    </nav>

    <main>
        <p class="genre">Our Reccomended Flavours</p>
        <div class="video-section">
            <button class="prev-button"><img src="../gambar/nextBtn.png" alt=""></button>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($product as $prdt) : ?>
                            <div class="swiper-slide">
                                <a href="#"><img src="../upload/<?php echo $prdt['gambar']; ?>" alt=""></a>
                                <p class="title"><?php echo $prdt['name']; ?></p>
                                <div class="order">
                                    <a href="addPesanan.php?id=<?php echo $prdt['id_product']; ?>">
                                        <button>Pesan Sekarang</button>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <button class="next-button"><img src="../gambar/nextBtn.png" alt=""></button>
        </div>

    </main>
    <footer>
        <div class="socials">
            <h4>Socials</h4>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i>
                Limude's Ice Cream</a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i>
                Limude's Ice Cream</a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i>
                Limude's_Ice_Cream</a>
            </div>
            <div class="other-links">
                <h4>Other Links</h4>
                <a href="#">Home</a>
                <a href="#">Home</a>
                <a href="#">Home</a>
            </div>
        <div class="contacts">
            <h4>Hubungi Kami</h4>
            <a href="https://t.me/LimudeIceCream" target="_blank"><i class="fab fa-telegram"></i>
                Limude's Ice Cream</a>
            <a href="mailto:LimudeIceCream@gmail.com">Limude'sIceCream@gmail.com</a>
            <a href="tel:+6281222449989">0812-2244-9989</a>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../Javascript/product.js"></script>
</body>
</html>